<?php include '_navbar.php'; ?>

        
        </header>
        <body>
        
        <div id="center">   
        
        <?php 
        include 'top.php';
        include 'php/genres.php' ?>
        
        
        </div>

        <?php include '_footer.php' ?>
        <script>
        function loadInd() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("center").innerHTML =
                    this.responseText;
                }
            };
            xhttp.open("GET", "base.php", true);
            xhttp.send();
        }
        
        function loadCo() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("center").innerHTML =
                        this.responseText;
                        }
                    };
                    xhttp.open("GET", "connexion.php", true);
                    xhttp.send();
                    }
                    // $(document)ready(function(){
                    //     $("#connection").click(function(){
                    //         $("#center").load('connexion.php';)
                    //     });
                    // });
                    
                    
                    function loadIns() {
                        var xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("center").innerHTML =
                                this.responseText;
                            }
                        };
                        xhttp.open("GET", "inscription.php", true);
                        xhttp.send();
                    }
                    
                    function loadDeco() {
                        var xhttp = new XMLHttpRequest();
                        xhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("center").innerHTML =
                                this.responseText;
                            }
                        };
                        xhttp.open("GET", "logout.php", true);
                        xhttp.send();
                    }
                    </script>
                    </body>
                    </html>