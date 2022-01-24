
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
        
        @include('partials.header')

        <main>
            <section class="jumbotrone"></section>
    
            <div class="container">
                <h2>Current Series</h2>
            </div>
    
            <div class="container-sup">
                <div class="container comicsBox">
                @foreach ($comic as $comic)
                    <div class="templatecomic">
                        <img src="{{ $comic['thumb']}}" alt="{{ $comic['series'] }}">
                        <h3>{{ $comic['series'] }}</h3>
                    </div>
                @endforeach
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

        @include('partials.footer')
        
    </body>
</html>
