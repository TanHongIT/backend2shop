<footer class="footer">
    <div class="container">
        <nav class="float-left">
            <ul>
              <li>
                <a href="{{url('/')}}">
                    {{ __('T2T') }}
                </a>
              </li>
              <li>
                <a href="{{route('about')}}">
                    {{ __('About Us') }}
                </a>
              </li>
              <li>
                <a href="https://tanhongit.net/">
                    {{ __('Blog') }}
                </a>
              </li>
              <li>
                <a href="https://tanhongit.net/">
                    {{ __('Licenses') }}
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://tanhongit.net/" target="_blank">T2T Team</a> for a better web.
          </div>
    </div>
</footer>