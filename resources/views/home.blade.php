
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
      
    </head>
    <body>
        <header>
            <div class="container">
                <div>
                    <img src="{{ asset('img/dc-logo.png') }}" alt="logo">
                </div>
                <div>
                   <ul>
                       @foreach ($navlist as $navlist)
                           <li>
                               <a href="">{{$navlist}}</a>
                           </li>
                       @endforeach
                    </ul>
                </div>
            </div>
        </header>

        <main>
            <section class="jumbotrone"></section>
    
            <div class="container">
                <h2>Current Series</h2>
            </div>
    
            <div class="container-sup">
                <div class="container comicsBox">
                    <p>
                      ciao
                    </p>
                </div>    
            </div>
    
            <button>
                <a href="">Load More</a>
            </button>
    
            <div class="container-inf">
                <div class="container">
                    <div class="box">
                        <img src="{{ asset('img/buy-comics-digital-comics.png') }} " alt="">
                        <P>Digital Comics</P>
                    </div>   
                    <div class="box">
                        <img src="{{ asset('img/buy-comics-merchandise.png') }} " alt="">
                        <P>Digital Comics</P>
                    </div>  
                    <div class="box">
                        <img src="{{ asset('img/buy-comics-subscriptions.png') }} " alt="">
                        <P>Digital Comics</P>
                    </div>  
                    <div class="box">
                        <img src="{{ asset('img/buy-comics-shop-locator.png') }} " alt="">
                        <P>Digital Comics</P>
                    </div>   
                    <div class="box">
                        <img src="{{ asset('img/buy-dc-power-visa.svg')}} " alt="">
                        <P>Digital Comics</P>
                    </div>  
                </div>
            </div>
        </main>

        <footer>
            <div class="footer-top">
                <div class="container">
                    <div class="list-box">
                        <div>
                            <ul>
                                <ol>Dc comics</ol>
                                <li v-for="li in listDcComics" :key="li">
                                    <a href="#">{{li}}</a>
                                </li>
                            </ul>
                            <ul>
                                <ol>Shop</ol>
                                <li v-for="li in listShop" :key="li">
                                    <a href="#">{{li}}</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <ol>Dc</ol>
                                <li v-for="li in listDc" :key="li">
                                    <a href="#">{{li}}</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <ul>
                                <ol>Sites</ol>
                                <li v-for="li in listSites" :key="li">
                                    <a href="#">{{li}}</a>
                                </li> 
                            </ul>
                        </div>
                    </div>
                    <div class="dc-logo"></div>
                </div>
            </div>
            <div class="footer-bot">
                <div class="container">
                    <div class="btn">
                        <a href="">Sign-up now!</a>
                    </div>
                    <div class="right">
                        <h2>Follow us</h2>
                        <img src="..\assets\img\footer-facebook.png" alt="">
                        <img src="..\assets\img\footer-twitter.png" alt="">
                        <img src="..\assets\img\footer-youtube.png" alt="">
                        <img src="..\assets\img\footer-pinterest.png" alt="">
                        <img src="..\assets\img\footer-periscope.png" alt="">
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
