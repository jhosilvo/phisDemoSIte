<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> ::PhisBank:: </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
        content="TechAuth - Authentication Pages Tailwind CSS 3 HTML Template, It’s fully responsive and built Tailwind v3"
        name="description" />
    <meta content="Techzaa" name="author" />

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Style css -->
    <link href="assets/css/style.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <section
        class="h-screen flex items-center justify-center bg-no-repeat inset-0 bg-cover bg-[url('../images/bg.png')]">
        <div class="container 2xl:px-80 xl:px-52">
            <div class="bg-white rounded-lg p-5" style="box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;">
                <div class="grid xl:grid-cols-5 lg:grid-cols-3 gap-6">

                    <div class="xl:col-span-2 lg:col-span-1 hidden lg:block">
                        <div
                            class="bg-sky-600 text-white rounded-lg flex flex-col justify-between gap-10 h-full w-full p-7">

                            <span class="font-semibold tracking-widest uppercase">PhisBank </span>

                            <div>
                                <h1 class="text-3xl/tight mb-4">Somos tu banco</h1>
                                <p class="text-gray-200 font-normal leading-relaxed">Confianza que crece, futuro que
                                    prospera: Tu banco, tu socio financiero.</p>
                            </div>

                            <div>
                                <div class="bg-sky-700/50 rounded-lg p-5">
                                    <div class="flex items-center gap-4">
                                        <img src="assets/images/Logo1.png" alt="" class="h-12 rounded-lg">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="xl:col-span-3 lg:col-span-2 lg:mx-10 my-auto">
                        <form name="frm1" action="otp.php" method="post">
                            <div>
                                <h1 class="text-2xl/tight mb-3">Inicio de sesión</h1>
                                <p class="text-sm font-medium leading-relaxed">Banca Online</p>
                            </div>

                            <div class="space-y-5 mt-10">

                                <div>
                                    <label class="font-medium text-sm block mb-2" for="email">Usuario</label>
                                    <input
                                        class="text-gray-500 border-gray-300 focus:ring-0 focus:border-gray-400 text-sm rounded-lg py-2.5 px-4 w-full"
                                        type="text" id="usuario" name="usuario" placeholder="Usuario">
                                </div>

                                <div>
                                    <div class="flex items-center justify-between mb-2">
                                        <label class="font-medium text-sm" for="pwd">Clave</label>
                                    </div>
                                    <input
                                        class="text-gray-500 border-gray-300 focus:ring-0 focus:border-gray-400 text-sm rounded-lg py-2.5 px-4 w-full"
                                        type="password" id="pwd" name="pwd" placeholder="Ingrese su clave">
                                </div>
                            </div>

                            <div class="flex flex-wrap items-center justify-between gap-6 mt-8">
                                <button class="bg-sky-600 text-white text-sm rounded-lg px-6 py-2.5">Inico de
                                    Sesión</button>

                            </div>
                            </from>
                    </div>

                </div>
                </br>
                <center>Este es un sitio de demostración de un Ataque de phishing y no pretende suplantar una marca u
                    organización. </br><b>No ingrese credenciales reales de ningún portal a este formulario.</b>
                    <br/>
                    <br/>
                    <b><span style='color:red'>Red</span>Team Pichincha 2023.</b>
                </center>
            </div>
        </div>
    </section>
</body>

</html>