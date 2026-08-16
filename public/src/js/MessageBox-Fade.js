document.addEventListener(
        'DOMContentLoaded',
        function() {
            var box = document.getElementById('message-box');
            if (box) {
                             
                setTimeout (
                        function() {
                            box.style.opacity = 1;
                        }, 1000
                );
                setTimeout (
                        function() {
                            box.style.opacity = 0.7;
                        }, 2000
                );
                setTimeout (
                        function() {
                            box.style.opacity = 0.4;
                        }, 3000
                );
                setTimeout (
                        function() {
                            box.style.opacity = 0;
                            box.style.display = 'none';
                        }, 4000
                );

                
            }
        }
    );