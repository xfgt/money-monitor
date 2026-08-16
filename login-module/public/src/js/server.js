
const express = require("express");
const bcrypt = require("bcrypt");
const fs = require("fs");
const session = require('express-session');

const app = express();
const port = 8080;

app.use(express.urlencoded({ extended: false }));
app.use(session({
  secret: 'gwewejgoiwegwuyoigEUGOUeswogiwogheiowyIEGOHEG',
  resave: false,
  saveUninitialized: false
}));
app.set("view engine", "ejs");
app.set("views", __dirname + "/views");

// create a connection to the MySQL database
const mysql = require("mysql2");
const con = mysql.createConnection({  /* add your database info here*/
  host: "localhost",
  user: "root",
  password: "",
  database: "mydb",
});

// handle the POST request to submit the form data
app.post("/submit-form-login", (req, res) => {
  const emailLogin = req.body.email;
  const passwordLogin = req.body.password;
  con.query(
    "SELECT * FROM users WHERE email=?",
    [emailLogin],
    function (err, rows, fields) {
      if (err) {
        res.send(err);
      } else if (rows.length === 0) {
        res.render("signin", {
          errms: "Няма намерен акаунт с тези данни за вход.",
          errinf: "Проверете дали сте попълнили данните си правилно и опитайте отново.",
        });
      } else {
        const user = rows[0];
        const hashedPwd = rows[0].password;
        bcrypt.compare(passwordLogin, hashedPwd, function (err, result) {
          if (err) {
            res.send(err);
          } else if (result) {
            req.session.user = user;
            res.render("indexlog", {
              message: `Здравей, ${user.firstname} ${user.lastname}`,
            });
          } else {
            res.render("signin", {
              errms: "Неправилна парола",
              errinf: "Моля опитайте отново",
            });
          }
        });
      }
    }
  );
});

const requireLogin = (req, res, next) => {
  if (req.session.user) {
    next();
  } else {
    res.redirect("/signin.html");
  }
};

app.get("/gallery.html", requireLogin, (req, res) => {
  res.sendFile(__dirname + "/public/gallery.html");
});
app.get("/faq.html", requireLogin, (req, res) => {
  res.sendFile(__dirname + "/public/faq.html");
});
app.get("/aboutus.html", requireLogin, (req, res) => {
  res.sendFile(__dirname + "/public/aboutus.html");
});
app.get("/indexlog.html", requireLogin, (req, res) => {
  res.render("indexlog.ejs", {
    message: req.session.user ? `Здравей, ${req.session.user.firstname} ${req.session.user.lastname}` : ""
  });
});

app.post("/submit-form", (req, res) => {
  const firstName = req.body.fname;
  const lastName = req.body.lname;
  const email = req.body.email;
  const password = req.body.pwd;
  const nameRegex = /[\u0400-\u04FF]/gi;
  const passwordRegex = /^(?=.*[A-Z])(?=.*[\W_])(?=.{8,})/;
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!nameRegex.test(firstName)) {
    res.render("signup", {
      message: "НЕВАЛИДНО ИМЕ",
      erinfo: "ИМЕТО ТРЯБВА ДА БЪДЕ ИЗПИСАНО НА КИРИЛИЦА",
    });
  } else if (!nameRegex.test(lastName)) {
    res.render("signup", {
      message: "МОЛЯ ВЪВЕДЕТЕ ВАЛИДНА ФАМИЛИЯ",
      erinfo: "ФАМИЛИЯТА ТРЯБВА ДА БЪДЕ ИЗПИСАНА НА КИРИЛИЦА",
    });
  } else if (!emailRegex.test(email)) {
    res.render("signup", {
      message: "ВЪВЕДЕНИЯТ ИМЕЙЛ АДРЕС Е НЕВАЛИДЕН",
      erinfo: "МОЛЯ ИЗПОЛЗВАЙТЕ ДРУГ EMAIL АДРЕС",
    });
  } else if (!passwordRegex.test(password)) {
    res.render("signup", {
      message: "ВЪВЕДЕНАТА ПАРОЛА Е НЕВАЛИДНА",
      erinfo:
        "ПАРОЛАТА ТРЯБВА ДА СЪДЪРЖА МИНИМУМ 8 СИМВОЛА, С МИНИМУМ ЕДИН СПЕЦИАЛЕН СИМВОЛ, ГЛАВНА БУКВА И ЦИФРА.",
    });
  } else {
    const saltRounds = 10;
    bcrypt.hash(password, saltRounds, (errPwd, hashPwd) => {
      if (errPwd) {
        console.error("Error hashing the password:", errPwd);
      } else {
        // insert the hashed password into the database
        const sql =
          "INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";
        const values = [firstName, lastName, email, hashPwd];

        // execute the SQL statement with the data from the form
        con.query(sql, values, (error, results, fields) => {
          if (error) {
            console.error("Error submitting form data:", error);
            res.render("signup", {
              message: "ВЪВЕДЕНИЯТ ИМЕЙЛ ВЕЧЕ СЪЩЕСТВУВА В СИСТЕМАТА",
              erinfo: "МОЛЯ ИЗПОЛЗВАЙТЕ ДРУГ EMAIL АДРЕС",
            });
          } else {
            const dirPath = __dirname + `/userimgs/${email}`; //cant make dir 
            fs.mkdir(dirPath, (err) => {
              if (err) {
                console.log(err);
              } else {
                console.log(`Directory ${dirPath} successfully created!`); //never met
              }
            });
            console.log(`Directory succesfully created in path ${dirPath}`);
            console.log("Form data submitted successfully.");
            res.sendFile(
              __dirname + "/public/signin.html"
            );
          }
        });
      }
    });
  }
});
app.use(express.static(__dirname)); // "/index.html"

// start the server
app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
  console.log("path: " + __dirname)
});
app.use((req, res, next) => {
  res
    .status(404)
    .sendFile(__dirname + "/public/notfound.html"); //if there's a 404
});

