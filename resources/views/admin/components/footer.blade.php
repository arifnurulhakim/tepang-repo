@section('footer')
<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="{{url('http://127.0.0.1:8000')}}">
                        Tepang
                    </a>
                </li>
                <li>
                    <a href="{{url('/')}}">
                        Facebook
                    </a>
                </li>
                <li>
                    <a href="{{url('/')}}">
                        Twitter
                    </a>
                </li>
                <li>
                    <a href="{{url('/')}}">
                        Instagram
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright pull-right">
            &copy; <script>document.write(new Date().getFullYear())</script>, made with Tepang V.2
        </div>
    </div>
</footer>
    @show