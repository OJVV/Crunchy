<div>
    <main>
        <!-- header -->
        <section>
            <header id="home" class="header">
                <div class="overlay text-white text-center">
                    <h1 class="display-2 my-3  font-paint-cans">Crunchy Truck</h1>
                    @forelse ($abouts as $about)
                    <h2 class="display-4 mb-5  font-paint-cans text-orange-300">{{$about->descripcion}}</h2>
                    @empty
                    <h2 class="display-4 mb-5  font-paint-cans text-orange-300">Solo Para Gustos Finos</h2>
                    @endforelse
              
                    <a class="btn btn-lg btn-primary font-paint-cans" href="#menu">Ver Menú</a>
                </div>
            </header>
        </section>

        <!--  About Section  -->

        <section>
            <div id="about" class="container-fluid wow fadeIn bg-cr" id="about" data-wow-duration="1.5s">
                <div class="row">
                    <div class="col-lg-6 has-img-bg" style="height: 1000px">
                    </div>
                    <div class="col-lg-6 ">
                        <div class="row justify-content-center">
                          
                            <div class="col-sm-8 py-5 my-5">
                                <h2 class="font-paint-cans text-white text-2xl">Acerca de Nosotros</h2>
                                <p class="text-white" >Crunchy truck inicia en 2023 siendo la idea de 3 "gorditos" de
                                    corazon que disfrutan de la buena comida, siendo una de las debilidades de todos
                                    las deliciosas frituras callejeras!

                                    A quien no se le antoja un sabroso pollito chuco, unos tentadores aros de
                                    cebolla, unos exquisitos jalapeño popper o una embrujante crunchy papa para
                                    alegrar el alma y darle placer al cuerpo?
                                    <br><br>
                                    Pues con esto en mente iniciamos nuestro proyecto y con la ayuda de nuestro
                                    equipo, un equipo de gente local que tiene una alta capacidad para cocinar las
                                    mejores frituras con pasion y dedicacion.
                                    <br><br>
                                    Nos enfocamos en llevar a tu mesa no solamente un plato de comida con que saciar
                                    el hambre, si no una experiencia de comida "callejera" mejorada y explosiva de
                                    la cual nos sentimos orgullosos y podras encontrar solamente con nosotros.
                                    <br><br>
                                    Que no hay nada mejor que disfrutar con los amigos, familia o incluso
                                    desconocidos de un incredible platillo en un ambiente diferente.
                                    <br><br>
                                    Asi que aqui te esperamos y como nosotros decimos, aqui tenes un menu solo para
                                    gustos finos.
                                </p>

                            </div> 
                         
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Menú Section  -->


        <section style="background-color: #f29901">
            <div id="menu" class="container-fluid text-light py-5 text-center wow fadeIn">
                <h2 class="section-title py-5 font-paint-cans">Menú</h2>
                <div class="row justify-content-center">
                    <div class="col-sm-7 col-md-4 mb-5">
                        <ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active font-paint-cans  text-white" id="pills-home-tab"
                                    data-toggle="pill" href="#foods" role="tab" aria-controls="pills-home"
                                    aria-selected="true">Entradas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-paint-cans text-white" id="pills-profile-tab"
                                    data-toggle="pill" href="#pollo" role="tab" aria-controls="pills-profile"
                                    aria-selected="false">Pollo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-paint-cans text-white" id="pills-profile-tab"
                                    data-toggle="pill" href="#combo" role="tab" aria-controls="pills-profile"
                                    aria-selected="false">Combos/Otros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-paint-cans text-white" id="pills-profile-tab"
                                    data-toggle="pill" href="#juices" role="tab" aria-controls="pills-profile"
                                    aria-selected="false">Refrescos</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="foods" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="row">

                            @forelse ($menus as $menu )

                            <div class="col-md-4">
                                <div class="card bg-transparent border my-3 my-md-0">

                                    <div class="h-80">
                                        <img src="{{ asset('storage/menu/' . $menu->project_image) }}"
                                        alt="Imagen Entrada"
                                            class="rounded-0 card-img-top mg-responsive object-cover max-w-full max-h-full"
                                       
                                        >

                                    </div>
                                    <div class="card-body ">
                                        <h4 class="pt20 pb20 font-paint-cans">{{$menu->title}}</h4>
                                        <p class="text-black font-paint-cans">{{$menu->descripcion}}</p>
                                        <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">L. {{$menu->precio}}</a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="col-md-4">
                                <div class="card bg-transparent border my-3 my-md-0">
                                    <img src="assets/imgs/blog-1.jpg"
                                        alt="template by DevCRID http://www.devcrud.com/"
                                        class="rounded-0 card-img-top mg-responsive">
                                    <div class="card-body ">
                                        <h4 class="pt20 pb20 font-paint-cans">Reiciendis Laborum </h4>
                                        <p class="text-black font-paint-cans">Lorem ipsum dolor sit amet,
                                            consectetur adipisicing elit. Culpa provident illum officiis fugit
                                            laudantium voluptatem sit iste delectus qui ex. </p>
                                        <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$5</a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-transparent border my-3 my-md-0">
                                    <img src="assets/imgs/blog-2.jpg"
                                        alt="template by DevCRID http://www.devcrud.com/"
                                        class="rounded-0 card-img-top mg-responsive">
                                    <div class="card-body">
                                        <h4 class="pt20 pb20 font-paint-cans">Adipisci Totam</h4>
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Culpa provident illum officiis fugit laudantium voluptatem sit
                                            iste delectus qui ex. </p>
                                        <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$12</a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card bg-transparent border my-3 my-md-0">
                                    <img src="assets/imgs/blog-3.jpg"
                                        alt="template by DevCRID http://www.devcrud.com/"
                                        class="rounded-0 card-img-top mg-responsive">
                                    <div class="card-body">
                                        <h4 class="pt20 pb20 font-paint-cans">Dicta Deserunt</h4>
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Culpa provident illum officiis fugit laudantium voluptatem sit
                                            iste delectus qui ex. </p>
                                        <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$8</a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            @endforelse
 
                        </div>
                    </div>
                    <div class="tab-pane fade" id="juices" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                            @forelse ($bebidas as $bebida )
                            <div class="col-md-4">
                                <div class="card bg-transparent border my-3 my-md-0">

                                    <div class="h-80">
                                        <img src="{{ asset('storage/bebida/' . $bebida->project_image) }}"
                                        alt="template by DevCRID http://www.devcrud.com/"
                                            class="rounded-0 card-img-top mg-responsive object-cover max-w-full max-h-full"
                                        >

                                    </div>
                                    <div class="card-body">
                                        <h4 class="pt20 pb20 font-paint-cans">{{$bebida->title}}</h4>
                                        <p class="text-black font-paint-cans">{{$bebida->descripcion}}</p>
                                        <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">L. {{$bebida->precio}}</a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="col-md-4 my-3 my-md-0">
                                <div class="card bg-transparent border">
                                    <img src="assets/imgs/blog-4.jpg"
                                        alt="template by DevCRID http://www.devcrud.com/"
                                        class="rounded-0 card-img-top mg-responsive">
                                    <div class="card-body">

                                        <h4 class="pt20 pb20 font-paint-cans">Consectetur Adipisicing Elit</h4>
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Culpa provident illum officiis fugit laudantium voluptatem sit
                                            iste delectus qui ex. </p>
                                        <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$15</a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 my-3 my-md-0">
                                <div class="card bg-transparent border">
                                    <img src="assets/imgs/blog-5.jpg"
                                        alt="template by DevCRID http://www.devcrud.com/"
                                        class="rounded-0 card-img-top mg-responsive">
                                    <div class="card-body">

                                        <h4 class="pt20 pb20 font-paint-cans ">Ullam Laboriosam</h4>
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Culpa provident illum officiis fugit laudantium voluptatem sit
                                            iste delectus qui ex. </p>
                                        <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$29</a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 my-3 my-md-0">
                                <div class="card bg-transparent border">
                                    <img src="assets/imgs/blog-6.jpg"
                                        alt="template by DevCRID http://www.devcrud.com/"
                                        class="rounded-0 card-img-top mg-responsive">
                                    <div class="card-body">

                                        <h4 class="pt20 pb20 font-paint-cans">Fugit Ipsam</h4>
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Culpa provident illum officiis fugit laudantium voluptatem sit
                                            iste delectus qui ex. </p>
                                        <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$3</a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            @endforelse
                            
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pollo" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                            @forelse ($pollos as $pollo )
                            <div class="col-md-4">
                                <div class="card bg-transparent border my-3 my-md-0">

                                    <div class="h-full">
                                        <img src="{{ asset('storage/pollo/' . $pollo->project_image) }}"
                                        alt="template by DevCRID http://www.devcrud.com/"
                                            class="rounded-0 card-img-top mg-responsive object-cover max-w-full max-h-full"
                                        >

                                    </div>
                                    <div class="card-body ">
                                        <h4 class="pt20 pb20 font-paint-cans">{{$pollo->title}}</h4>
                                        <p class="text-black font-paint-cans">{{$pollo->descripcion}}</p>
                                        <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">L. {{$pollo->precio}}</a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="col-md-4 my-3 my-md-0">
                                <div class="card bg-transparent border">
                                    <img src="assets/imgs/blog-4.jpg"
                                        alt="template by DevCRID http://www.devcrud.com/"
                                        class="rounded-0 card-img-top mg-responsive">
                                    <div class="card-body">

                                        <h4 class="pt20 pb20 font-paint-cans">Consectetur Adipisicing Elit</h4>
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Culpa provident illum officiis fugit laudantium voluptatem sit
                                            iste delectus qui ex. </p>
                                        <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$15</a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 my-3 my-md-0">
                                <div class="card bg-transparent border">
                                    <img src="assets/imgs/blog-5.jpg"
                                        alt="template by DevCRID http://www.devcrud.com/"
                                        class="rounded-0 card-img-top mg-responsive">
                                    <div class="card-body">

                                        <h4 class="pt20 pb20 font-paint-cans ">Ullam Laboriosam</h4>
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Culpa provident illum officiis fugit laudantium voluptatem sit
                                            iste delectus qui ex. </p>
                                        <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$29</a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 my-3 my-md-0">
                                <div class="card bg-transparent border">
                                    <img src="assets/imgs/blog-6.jpg"
                                        alt="template by DevCRID http://www.devcrud.com/"
                                        class="rounded-0 card-img-top mg-responsive">
                                    <div class="card-body">

                                        <h4 class="pt20 pb20 font-paint-cans">Fugit Ipsam</h4>
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Culpa provident illum officiis fugit laudantium voluptatem sit
                                            iste delectus qui ex. </p>
                                        <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$3</a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            @endforelse
                            
                        </div>
                    </div>


                    <div class="tab-pane fade" id="combo" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                            @forelse ($combos as $combo )
                            <div class="col-md-4">
                                <div class="card bg-transparent border my-3 my-md-0">

                                    <div class="h-80">
                                        <img src="{{ asset('storage/combo/' . $combo->project_image) }}"
                                        alt="template by DevCRID http://www.devcrud.com/"
                                            class="rounded-0 card-img-top mg-responsive object-cover max-w-full max-h-full"
                                        >

                                    </div>
                                    <div class="card-body ">
                                        <h4 class="pt20 pb20 font-paint-cans">{{$combo->title}}</h4>
                                        <p class="text-black font-paint-cans">{{$combo->descripcion}}</p>
                                        <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">L. {{$combo->precio}}</a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="col-md-4 my-3 my-md-0">
                                <div class="card bg-transparent border">
                                    <img src="assets/imgs/blog-4.jpg"
                                        alt="template by DevCRID http://www.devcrud.com/"
                                        class="rounded-0 card-img-top mg-responsive">
                                    <div class="card-body">

                                        <h4 class="pt20 pb20 font-paint-cans">Consectetur Adipisicing Elit</h4>
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Culpa provident illum officiis fugit laudantium voluptatem sit
                                            iste delectus qui ex. </p>
                                        <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$15</a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 my-3 my-md-0">
                                <div class="card bg-transparent border">
                                    <img src="assets/imgs/blog-5.jpg"
                                        alt="template by DevCRID http://www.devcrud.com/"
                                        class="rounded-0 card-img-top mg-responsive">
                                    <div class="card-body">

                                        <h4 class="pt20 pb20 font-paint-cans ">Ullam Laboriosam</h4>
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Culpa provident illum officiis fugit laudantium voluptatem sit
                                            iste delectus qui ex. </p>
                                        <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$29</a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 my-3 my-md-0">
                                <div class="card bg-transparent border">
                                    <img src="assets/imgs/blog-6.jpg"
                                        alt="template by DevCRID http://www.devcrud.com/"
                                        class="rounded-0 card-img-top mg-responsive">
                                    <div class="card-body">

                                        <h4 class="pt20 pb20 font-paint-cans">Fugit Ipsam</h4>
                                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Culpa provident illum officiis fugit laudantium voluptatem sit
                                            iste delectus qui ex. </p>
                                        <h1 class="text-center mb-4"><a href="#" class="badge badge-primary">$3</a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            @endforelse
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT Section  -->
        <section class="bg-gray-800">
            <div id="contact" class="container-fluid bg-dark text-light border-top wow fadeIn bg-gray-800">
                <div class="row">
                    <div class="col-md-6 px-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3857.7842355906796!2d-88.7808136!3d14.781179799999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f640955d04e024f%3A0xf8c9b60cba4c5211!2sFood%20trucks%20Santa%20Rosa!5e0!3m2!1sen!2sde!4v1701685434566!5m2!1sen!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6 px-5 has-height-lg middle-items bg-cr">
                        <h3 class="font-paint-cans text-2xl">Encuéntranos</h3>

                        <div>
                            <br>
                            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-geo-alt mr2" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg> Frente a Estadio Sergio Reyes, Food trucks, Santa Rosa 0401</p>


                            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-whatsapp mr-2" viewBox="0 0 16 16">
                                    <path
                                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                </svg><a href="https://api.whatsapp.com/send?phone=50432082651">+504 3208-2651</a></p>

                            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-facebook mr-2" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg><a href="https://www.facebook.com/profile.php?id=100093362767592">Crunchytruck</a></p>


                            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-instagram mr-2" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg><a href="https://www.instagram.com/crunchytruck0401/?igshid=MzRlODBiNWFlZA=="
                                    target="_blank">crunchytruck0401</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- page footer  -->
        <section>
            <div
                class="container-fluid bg-cr text-light has-height-md middle-items border-top text-center wow fadeIn">
                <div class="row">
                    <div class="col-sm-4">
                        <h3 class=" font-paint-cans">Email</h3>
                        <P class="text-muted font-paint-cans">info@website.com</P>
                    </div>
                    <div class="col-sm-4">
                        <h3 class=" font-paint-cans">Contáctanos</h3>
                      <p><a href="https://api.whatsapp.com/send?phone=50432082651">+504 3208-2651</a></p>
                    </div>
                    <div class="col-sm-4">
                        <h3 class=" font-paint-cans">Dirección</h3>
                        <P class="text-muted font-paint-cans">Frente a Estadio Sergio Reyes, Food trucks, Santa Rosa
                            0401</P>
                    </div>
                </div>
            </div>
            <div class="bg-gray-800 text-light text-center border-top wow fadeIn">
                <p class="mb-0 py-3 text-muted small">&copy; Copyright <script>
                        document.write(new Date().getFullYear())
                    </script>
                </p>

            </div>
    </main>
</div>