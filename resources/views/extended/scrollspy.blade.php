@extends('layouts.vertical', ["page_title"=> "Scrollspy"])

@section('content')
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Extended UI</a></li>
                        <li class="breadcrumb-item active">Scrollspy</li>
                    </ol>
                </div>
                <h4 class="page-title">Scrollspy</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Example in navbar</h4>
                    <p class="text-muted font-14">Scroll the area below the navbar and watch the active
                        class change. The dropdown items will be highlighted as well.</p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#navbar-example-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#navbar-example-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="navbar-example-preview">
                            <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
                                <a class="navbar-brand" href="#">Navbar</a>
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#fat">@fat</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#mdo">@mdo</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <i class="mdi mdi-chevron-down"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#one">one</a>
                                            <a class="dropdown-item" href="#two">two</a>
                                            <div role="separator" class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#three">three</a>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example">
                                <h4 id="fat">@fat</h4>
                                <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr
                                    enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle
                                    rights whatever. Anim keffiyeh carles cardigan. Velit seitan
                                    mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean
                                    shorts, williamsburg hoodie minim qui you probably haven't heard of
                                    them et cardigan trust fund culpa biodiesel wes anderson aesthetic.
                                    Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan
                                    ullamco consequat.</p>
                                <h4 id="mdo">@mdo</h4>
                                <p>Veniam marfa mustache skateboard, adipisicing fugiat velit pitchfork
                                    beard. Freegan beard aliqua cupidatat mcsweeney's vero. Cupidatat
                                    four loko nisi, ea helvetica nulla carles. Tattooed cosby sweater
                                    food truck, mcsweeney's quis non freegan vinyl. Lo-fi wes anderson
                                    +1 sartorial. Carles non aesthetic exercitation quis gentrify.
                                    Brooklyn adipisicing craft beer vice keytar deserunt.</p>
                                <h4 id="one">one</h4>
                                <p>Occaecat commodo aliqua delectus. Fap craft beer deserunt skateboard
                                    ea. Lomo bicycle rights adipisicing banh mi, velit ea sunt next
                                    level locavore single-origin coffee in magna veniam. High life id
                                    vinyl, echo park consequat quis aliquip banh mi pitchfork. Vero VHS
                                    est adipisicing. Consectetur nisi DIY minim messenger bag. Cred ex
                                    in, sustainable delectus consectetur fanny pack iphone.</p>
                                <h4 id="two">two</h4>
                                <p>In incididunt echo park, officia deserunt mcsweeney's proident master
                                    cleanse thundercats sapiente veniam. Excepteur VHS elit, proident
                                    shoreditch +1 biodiesel laborum craft beer. Single-origin coffee
                                    wayfarers irure four loko, cupidatat terry richardson master
                                    cleanse. Assumenda you probably haven't heard of them art party
                                    fanny pack, tattooed nulla cardigan tempor ad. Proident wolf
                                    nesciunt sartorial keffiyeh eu banh mi sustainable. Elit wolf
                                    voluptate, lo-fi ea portland before they sold out four loko.
                                    Locavore enim nostrud mlkshk brooklyn nesciunt.</p>
                                <h4 id="three">three</h4>
                                <p>Ad leggings keytar, brunch id art party dolor labore. Pitchfork yr
                                    enim lo-fi before they sold out qui. Tumblr farm-to-table bicycle
                                    rights whatever. Anim keffiyeh carles cardigan. Velit seitan
                                    mcsweeney's photo booth 3 wolf moon irure. Cosby sweater lomo jean
                                    shorts, williamsburg hoodie minim qui you probably haven't heard of
                                    them et cardigan trust fund culpa biodiesel wes anderson aesthetic.
                                    Nihil tattooed accusamus, cred irony biodiesel keffiyeh artisan
                                    ullamco consequat.</p>
                                <p>Keytar twee blog, culpa messenger bag marfa whatever delectus food
                                    truck. Sapiente synth id assumenda. Locavore sed helvetica cliche
                                    irony, thundercats you probably haven't heard of them consequat
                                    hoodie gluten-free lo-fi fap aliquip. Labore elit placeat before
                                    they sold out, terry richardson proident brunch nesciunt quis cosby
                                    sweater pariatur keffiyeh ut helvetica artisan. Cardigan craft beer
                                    seitan readymade velit. VHS chambray laboris tempor veniam. Anim
                                    mollit minim commodo ullamco thundercats.
                                </p>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane" id="navbar-example-code">
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;nav id=&quot;navbar-example2&quot; class=&quot;navbar navbar-light bg-light px-3&quot;&gt;
                                                            &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;Navbar&lt;/a&gt;
                                                            &lt;ul class=&quot;nav nav-pills&quot;&gt;
                                                                &lt;li class=&quot;nav-item&quot;&gt;
                                                                    &lt;a class=&quot;nav-link active&quot; href=&quot;#fat&quot;&gt;@fat&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class=&quot;nav-item&quot;&gt;
                                                                    &lt;a class=&quot;nav-link&quot; href=&quot;#mdo&quot;&gt;@mdo&lt;/a&gt;
                                                                &lt;/li&gt;
                                                                &lt;li class=&quot;nav-item dropdown&quot;&gt;
                                                                    &lt;a class=&quot;nav-link dropdown-toggle arrow-none&quot;
                                                                        data-bs-toggle=&quot;dropdown&quot; href=&quot;#&quot; role=&quot;button&quot;
                                                                        aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown &lt;i
                                                                            class=&quot;mdi mdi-chevron-down&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                    &lt;div class=&quot;dropdown-menu dropdown-menu-end&quot;&gt;
                                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;#one&quot;&gt;one&lt;/a&gt;
                                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;#two&quot;&gt;two&lt;/a&gt;
                                                                        &lt;div role=&quot;separator&quot; class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
                                                                        &lt;a class=&quot;dropdown-item&quot; href=&quot;#three&quot;&gt;three&lt;/a&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/li&gt;
                                                            &lt;/ul&gt;
                                                        &lt;/nav&gt;
                                                        
                                                        &lt;div data-bs-spy=&quot;scroll&quot; data-bs-target=&quot;#navbar-example2&quot; data-bs-offset=&quot;0&quot;
                                                            class=&quot;scrollspy-example&quot;&gt;
                                                            &lt;h4 id=&quot;fat&quot;&gt;@fat&lt;/h4&gt;
                                                            &lt;p&gt;...&lt;/p&gt;
                                                            &lt;h4 id=&quot;mdo&quot;&gt;@mdo&lt;/h4&gt;
                                                            &lt;p&gt;...&lt;/p&gt;
                                                            &lt;h4 id=&quot;one&quot;&gt;one&lt;/h4&gt;
                                                            &lt;p&gt;...&lt;/p&gt;
                                                            &lt;h4 id=&quot;two&quot;&gt;two&lt;/h4&gt;
                                                            &lt;p&gt;...&lt;/p&gt;
                                                            &lt;h4 id=&quot;three&quot;&gt;three&lt;/h4&gt;
                                                            &lt;p&gt;...&lt;/p&gt;
                                                            &lt;p&gt;...&lt;/p&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->

    </div>
    <!-- end row -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Example with nested nav</h4>
                    <p class="text-muted font-14">Scrollspy also works with nested <code>.nav</code>s.
                        If a nested <code>.nav</code> is <code>.active</code>, its parents will also be
                        <code>.active</code>. Scroll the area next to the navbar and watch the active
                        class change.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#nested-example-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#nested-example-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="nested-example-preview">
                            <div class="row">
                                <div class="col-4">
                                    <nav id="navbar-example3" class="navbar navbar-light flex-column">
                                        <a class="navbar-brand" href="#">Navbar</a>
                                        <nav class="nav nav-pills flex-column">
                                            <a class="nav-link active" href="#item-1">Item 1</a>
                                            <nav class="nav nav-pills flex-column">
                                                <a class="nav-link ms-3 my-1 active" href="#item-1-1">Item 1-1</a>
                                                <a class="nav-link ms-3 my-1" href="#item-1-2">Item
                                                    1-2</a>
                                            </nav>
                                            <a class="nav-link" href="#item-2">Item 2</a>
                                            <a class="nav-link" href="#item-3">Item 3</a>
                                            <nav class="nav nav-pills flex-column">
                                                <a class="nav-link ms-3 my-1" href="#item-3-1">Item
                                                    3-1</a>
                                                <a class="nav-link ms-3 my-1" href="#item-3-2">Item
                                                    3-2</a>
                                            </nav>
                                        </nav>
                                    </nav>
                                </div>
                                <div class="col-8">
                                    <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-offset="0" class="scrollspy-example" style="height: 350px;">
                                        <h4 id="item-1">Item 1</h4>
                                        <p>Ex consequat commodo adipisicing exercitation aute excepteur
                                            occaecat ullamco duis aliqua id magna ullamco eu. Do aute
                                            ipsum ipsum ullamco cillum consectetur ut et aute
                                            consectetur labore. Fugiat laborum incididunt tempor eu
                                            consequat enim dolore proident. Qui laborum do non excepteur
                                            nulla magna eiusmod consectetur in. Aliqua et aliqua officia
                                            quis et incididunt voluptate non anim reprehenderit
                                            adipisicing dolore ut consequat deserunt mollit dolore.
                                            Aliquip nulla enim veniam non fugiat id cupidatat nulla elit
                                            cupidatat commodo velit ut eiusmod cupidatat elit dolore.
                                        </p>
                                        <h5 id="item-1-1">Item 1-1</h5>
                                        <p>Amet tempor mollit aliquip pariatur excepteur commodo do ea
                                            cillum commodo Lorem et occaecat elit qui et. Aliquip labore
                                            ex ex esse voluptate occaecat Lorem ullamco deserunt. Aliqua
                                            cillum excepteur irure consequat id quis ea. Sit proident
                                            ullamco aute magna pariatur nostrud labore. Reprehenderit
                                            aliqua commodo eiusmod aliquip est do duis amet proident
                                            magna consectetur consequat eu commodo fugiat non quis. Enim
                                            aliquip exercitation ullamco adipisicing voluptate excepteur
                                            minim exercitation minim minim commodo adipisicing
                                            exercitation officia nisi adipisicing. Anim id duis qui
                                            consequat labore adipisicing sint dolor elit cillum anim et
                                            fugiat.</p>
                                        <h5 id="item-1-2">Item 1-2</h5>
                                        <p>Cillum nisi deserunt magna eiusmod qui eiusmod velit
                                            voluptate pariatur laborum sunt enim. Irure laboris mollit
                                            consequat incididunt sint et culpa culpa incididunt
                                            adipisicing magna magna occaecat. Nulla ipsum cillum eiusmod
                                            sint elit excepteur ea labore enim consectetur in labore
                                            anim. Proident ullamco ipsum esse elit ut Lorem eiusmod
                                            dolor et eiusmod. Anim occaecat nulla in non consequat
                                            eiusmod velit incididunt.</p>
                                        <h4 id="item-2">Item 2</h4>
                                        <p>Quis magna Lorem anim amet ipsum do mollit sit cillum
                                            voluptate ex nulla tempor. Laborum consequat non elit enim
                                            exercitation cillum aliqua consequat id aliqua. Esse ex
                                            consectetur mollit voluptate est in duis laboris ad sit
                                            ipsum anim Lorem. Incididunt veniam velit elit elit veniam
                                            Lorem aliqua quis ullamco deserunt sit enim elit aliqua esse
                                            irure. Laborum nisi sit est tempor laborum mollit labore
                                            officia laborum excepteur commodo non commodo dolor
                                            excepteur commodo. Ipsum fugiat ex est consectetur ipsum
                                            commodo tempor sunt in proident.</p>
                                        <h4 id="item-3">Item 3</h4>
                                        <p>Quis anim sit do amet fugiat dolor velit sit ea ea do
                                            reprehenderit culpa duis. Nostrud aliqua ipsum fugiat minim
                                            proident occaecat excepteur aliquip culpa aute tempor
                                            reprehenderit. Deserunt tempor mollit elit ex pariatur
                                            dolore velit fugiat mollit culpa irure ullamco est ex
                                            ullamco excepteur.</p>
                                        <h5 id="item-3-1">Item 3-1</h5>
                                        <p>Deserunt quis elit Lorem eiusmod amet enim enim amet minim
                                            Lorem proident nostrud. Ea id dolore anim exercitation aute
                                            fugiat labore voluptate cillum do laboris labore. Ex velit
                                            exercitation nisi enim labore reprehenderit labore nostrud
                                            ut ut. Esse officia sunt duis aliquip ullamco tempor eiusmod
                                            deserunt irure nostrud irure. Ullamco proident veniam
                                            laboris ea consectetur magna sunt ex exercitation aliquip
                                            minim enim culpa occaecat exercitation. Est tempor excepteur
                                            aliquip laborum consequat do deserunt laborum esse eiusmod
                                            irure proident ipsum esse qui.</p>
                                        <h5 id="item-3-2">Item 3-2</h5>
                                        <p>Labore sit culpa commodo elit adipisicing sit aliquip elit
                                            proident voluptate minim mollit nostrud aute reprehenderit
                                            do. Mollit excepteur eu Lorem ipsum anim commodo sint labore
                                            Lorem in exercitation velit incididunt. Occaecat consectetur
                                            nisi in occaecat proident minim enim sunt reprehenderit
                                            exercitation cupidatat et do officia. Aliquip consequat ad
                                            labore labore mollit ut amet. Sit pariatur tempor proident
                                            in veniam culpa aliqua excepteur elit magna fugiat eiusmod
                                            amet officia.</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane" id="nested-example-code">
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;row&quot;&gt;
                                                            &lt;div class=&quot;col-4&quot;&gt;
                                                                &lt;nav id=&quot;navbar-example3&quot; class=&quot;navbar navbar-light flex-column&quot;&gt;
                                                                    &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;Navbar&lt;/a&gt;
                                                                    &lt;nav class=&quot;nav nav-pills flex-column&quot;&gt;
                                                                        &lt;a class=&quot;nav-link active&quot; href=&quot;#item-1&quot;&gt;Item 1&lt;/a&gt;
                                                                        &lt;nav class=&quot;nav nav-pills flex-column&quot;&gt;
                                                                            &lt;a class=&quot;nav-link ms-3 my-1 active&quot;
                                                                                href=&quot;#item-1-1&quot;&gt;Item 1-1&lt;/a&gt;
                                                                            &lt;a class=&quot;nav-link ms-3 my-1&quot; href=&quot;#item-1-2&quot;&gt;Item
                                                                                1-2&lt;/a&gt;
                                                                        &lt;/nav&gt;
                                                                        &lt;a class=&quot;nav-link&quot; href=&quot;#item-2&quot;&gt;Item 2&lt;/a&gt;
                                                                        &lt;a class=&quot;nav-link&quot; href=&quot;#item-3&quot;&gt;Item 3&lt;/a&gt;
                                                                        &lt;nav class=&quot;nav nav-pills flex-column&quot;&gt;
                                                                            &lt;a class=&quot;nav-link ms-3 my-1&quot; href=&quot;#item-3-1&quot;&gt;Item
                                                                                3-1&lt;/a&gt;
                                                                            &lt;a class=&quot;nav-link ms-3 my-1&quot; href=&quot;#item-3-2&quot;&gt;Item
                                                                                3-2&lt;/a&gt;
                                                                        &lt;/nav&gt;
                                                                    &lt;/nav&gt;
                                                                &lt;/nav&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;col-8&quot;&gt;
                                                                &lt;div data-bs-spy=&quot;scroll&quot; data-bs-target=&quot;#navbar-example3&quot;
                                                                    data-bs-offset=&quot;0&quot; class=&quot;scrollspy-example&quot;
                                                                    style=&quot;height: 350px;&quot;&gt;
                                                                    &lt;h4 id=&quot;item-1&quot;&gt;Item 1&lt;/h4&gt;
                                                                    &lt;p&gt;...&lt;/p&gt;
                                                                    &lt;h5 id=&quot;item-1-1&quot;&gt;Item 1-1&lt;/h5&gt;
                                                                    &lt;p&gt;...&lt;/p&gt;
                                                                    &lt;h5 id=&quot;item-1-2&quot;&gt;Item 1-2&lt;/h5&gt;
                                                                    &lt;p&gt;...&lt;/p&gt;
                                                                    &lt;h4 id=&quot;item-2&quot;&gt;Item 2&lt;/h4&gt;
                                                                    &lt;p&gt;...&lt;/p&gt;
                                                                    &lt;h4 id=&quot;item-3&quot;&gt;Item 3&lt;/h4&gt;
                                                                    &lt;p&gt;...&lt;/p&gt;
                                                                    &lt;h5 id=&quot;item-3-1&quot;&gt;Item 3-1&lt;/h5&gt;
                                                                    &lt;p&gt;...&lt;/p&gt;
                                                                    &lt;h5 id=&quot;item-3-2&quot;&gt;Item 3-2&lt;/h5&gt;
                                                                    &lt;p&gt;...&lt;/p&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Example with list-group</h4>
                    <p class="text-muted font-14">Scrollspy also works with nested <code>.nav</code>s.
                        If a nested <code>.nav</code> is <code>.active</code>, its parents will also be
                        <code>.active</code>. Scroll the area next to the navbar and watch the active
                        class change.
                    </p>

                    <ul class="nav nav-tabs nav-bordered mb-3">
                        <li class="nav-item">
                            <a href="#list-group-example-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                Preview
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#list-group-example-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                Code
                            </a>
                        </li>
                    </ul> <!-- end nav-->
                    <div class="tab-content">
                        <div class="tab-pane show active" id="list-group-example-preview">
                            <div class="row">
                                <div class="col-4">
                                    <div id="list-example" class="list-group">
                                        <a class="list-group-item list-group-item-action active" href="#list-item-1">Item 1</a>
                                        <a class="list-group-item list-group-item-action" href="#list-item-2">Item 2</a>
                                        <a class="list-group-item list-group-item-action" href="#list-item-3">Item 3</a>
                                        <a class="list-group-item list-group-item-action" href="#list-item-4">Item 4</a>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example">
                                        <h4 id="list-item-1">Item 1</h4>
                                        <p>Ex consequat commodo adipisicing exercitation aute excepteur
                                            occaecat ullamco duis aliqua id magna ullamco eu. Do aute
                                            ipsum ipsum ullamco cillum consectetur ut et aute
                                            consectetur labore. Fugiat laborum incididunt tempor eu
                                            consequat enim dolore proident. Qui laborum do non excepteur
                                            nulla magna eiusmod consectetur in. Aliqua et aliqua officia
                                            quis et incididunt voluptate non anim reprehenderit
                                            adipisicing dolore ut consequat deserunt mollit dolore.
                                            Aliquip nulla enim veniam non fugiat id cupidatat nulla elit
                                            cupidatat commodo velit ut eiusmod cupidatat elit dolore.
                                        </p>
                                        <h4 id="list-item-2">Item 2</h4>
                                        <p>Quis magna Lorem anim amet ipsum do mollit sit cillum
                                            voluptate ex nulla tempor. Laborum consequat non elit enim
                                            exercitation cillum aliqua consequat id aliqua. Esse ex
                                            consectetur mollit voluptate est in duis laboris ad sit
                                            ipsum anim Lorem. Incididunt veniam velit elit elit veniam
                                            Lorem aliqua quis ullamco deserunt sit enim elit aliqua esse
                                            irure. Laborum nisi sit est tempor laborum mollit labore
                                            officia laborum excepteur commodo non commodo dolor
                                            excepteur commodo. Ipsum fugiat ex est consectetur ipsum
                                            commodo tempor sunt in proident.</p>
                                        <h4 id="list-item-3">Item 3</h4>
                                        <p>Quis anim sit do amet fugiat dolor velit sit ea ea do
                                            reprehenderit culpa duis. Nostrud aliqua ipsum fugiat minim
                                            proident occaecat excepteur aliquip culpa aute tempor
                                            reprehenderit. Deserunt tempor mollit elit ex pariatur
                                            dolore velit fugiat mollit culpa irure ullamco est ex
                                            ullamco excepteur.</p>
                                        <h4 id="list-item-4">Item 4</h4>
                                        <p>Quis anim sit do amet fugiat dolor velit sit ea ea do
                                            reprehenderit culpa duis. Nostrud aliqua ipsum fugiat minim
                                            proident occaecat excepteur aliquip culpa aute tempor
                                            reprehenderit. Deserunt tempor mollit elit ex pariatur
                                            dolore velit fugiat mollit culpa irure ullamco est ex
                                            ullamco excepteur.</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end preview-->

                        <div class="tab-pane" id="list-group-example-code">
                            <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;row&quot;&gt;
                                                            &lt;div class=&quot;col-4&quot;&gt;
                                                                &lt;div id=&quot;list-example&quot; class=&quot;list-group&quot;&gt;
                                                                    &lt;a class=&quot;list-group-item list-group-item-action active&quot;
                                                                        href=&quot;#list-item-1&quot;&gt;Item 1&lt;/a&gt;
                                                                    &lt;a class=&quot;list-group-item list-group-item-action&quot;
                                                                        href=&quot;#list-item-2&quot;&gt;Item 2&lt;/a&gt;
                                                                    &lt;a class=&quot;list-group-item list-group-item-action&quot;
                                                                        href=&quot;#list-item-3&quot;&gt;Item 3&lt;/a&gt;
                                                                    &lt;a class=&quot;list-group-item list-group-item-action&quot;
                                                                        href=&quot;#list-item-4&quot;&gt;Item 4&lt;/a&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;col-8&quot;&gt;
                                                                &lt;div data-bs-spy=&quot;scroll&quot; data-bs-target=&quot;#list-example&quot; data-bs-offset=&quot;0&quot;
                                                                    class=&quot;scrollspy-example&quot;&gt;
                                                                    &lt;h4 id=&quot;list-item-1&quot;&gt;Item 1&lt;/h4&gt;
                                                                    &lt;p&gt;...&lt;/p&gt;
                                                                    &lt;h4 id=&quot;list-item-2&quot;&gt;Item 2&lt;/h4&gt;
                                                                    &lt;p&gt;...&lt;/p&gt;
                                                                    &lt;h4 id=&quot;list-item-3&quot;&gt;Item 3&lt;/h4&gt;
                                                                    &lt;p&gt;...&lt;/p&gt;
                                                                    &lt;h4 id=&quot;list-item-4&quot;&gt;Item 4&lt;/h4&gt;
                                                                    &lt;p&gt;...&lt;/p&gt;
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                        </div> <!-- end preview code-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

</div> <!-- container -->
@endsection