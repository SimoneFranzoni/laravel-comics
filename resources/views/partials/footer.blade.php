<footer>
    <div class="footer-top">
        <div class="container">
            <div class="list-box">
                <div>
                    <ul>
                        <ol>Dc comics</ol>
                        @foreach ($listDcComics as $listDcComics)
                        <li>
                            <a href="">{{$listDcComics}}</a>
                        </li>
                        @endforeach
                    </ul>
                    <ul>
                        <ol>Shop</ol>
                        @foreach ($listShop as $listShop)
                        <li>
                            <a href="">{{$listShop}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <ul>
                        <ol>Dc</ol>
                        @foreach ($listDc as $listDc)
                        <li>
                            <a href="">{{$listDc}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <ul>
                        <ol>Sites</ol>
                        @foreach ($listSites as $listSites)
                        <li>
                            <a href="">{{$listSites}}</a>
                        </li>
                        @endforeach
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
                <img src=" {{ asset('img/footer-facebook.png')}} " alt="">
                <img src=" {{ asset('img/footer-twitter.png')}} " alt="">
                <img src=" {{ asset('img/footer-youtube.png')}} " alt="">
                <img src=" {{ asset('img/footer-pinterest.png')}} " alt="">
                <img src=" {{ asset('img/footer-periscope.png')}} " alt="">
            </div>
        </div>
    </div>
</footer>