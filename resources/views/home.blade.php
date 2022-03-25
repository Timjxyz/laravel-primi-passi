<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discord</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
header{
   
    height: 70px;
    background-color:#3161e0;
   
 }
.row{
    height: 70px;
    width: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;
}

nav{
    display: flex;  
}

nav ul{
    justify-content: space-around;
    display: flex;
    list-style: none;

}

nav ul li{
    margin: 0px 30px;
}
nav ul li a{
    color: #000;
}
/* Regole bottone login */
.login {
    display: inline-block;
    
    width: 15%;
    text-align: right;
}

.login .btn{
    text-decoration: none;
    background-color: white;
    color: black;
    border-radius: 16px;
    padding: 7px 16px;
    display: inline;

}

/* Fine regole header */

.active{
    color: red;
}

main h1{
    margin-top: 50px;
    text-align: center;
    width: 100%;
    font-size: 30px;
}

</style>
<body>
    <!-- Inizio header -->
    <header>
        <!-- Contenitore elementi presenti nel header -->
        <div class="container">
            <div class="row">
                <!-- Barra di navigazione header -->
                <nav>
                    <ul>
                        <li><a href="scarica">Scarica</a></li>
                        <li><a class="active" href="home">Home Discord</a></li>
                        <li><a href="nitro">Nitro</a></li>
                        <li><a href="sicurezza">Sicurezza</a></li>
                        <li><a href="assistenza">Assistenza</a></li>
                    </ul>
                </nav>

                <!-- Tasto login per account -->
                <div class="login">
                    <a class="btn" href="#">Accedi</a>
                </div>
            </div>
        </div>

    </header>
    <!-- Fine header -->

    <main>
        <h1>Pagina HOME</h1>
    </main>
    
    
</body>
</html>