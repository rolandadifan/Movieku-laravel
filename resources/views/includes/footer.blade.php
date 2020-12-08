<!-- footer -->
<section id="footer">
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-md-6">
                <p class="text-follow">Follow Us</p>
                <div class="social-icons">
                    <a href=""><img src="{{asset('assets/img/fb.png')}}" alt="" /></a>
                    <a href=""><img src="{{asset('assets/img/tw.png')}}" alt="" /></a>
                    <a href=""><img src="{{asset('assets/img/ig.png')}}" alt="" /></a>
                    <a href=""><img src="{{asset('assets/img/wa.png')}}" alt="" /></a>
                </div>
            </div>
            <div class="col-md-6">
                <p class="text-subs">Subscribe</p>
                <form action="{{url('/subscribe')}}" method="post" class="subscribe">
                    @csrf
                    <div class="row">
                        <div class="form-group">
                            <input type="email" class="form-control mr-5 ipt-email" name="subscriber" placeholder="Your Email">
                            @error('subscriber')
                            <div class="invalid-tooltip">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-secondary ml-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="copyright">
        <hr>
        <p class="copy-right">CopyRight &copy; 2020 Movieku indonesia </p>
    </div>
</section>
<!-- endfooter -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v8.0" nonce="YBvs13AW"></script>
<!-- owl-carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<script src="{{asset('assets/js/smooth-scroll.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script>
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })
</script>

</body>

</html>