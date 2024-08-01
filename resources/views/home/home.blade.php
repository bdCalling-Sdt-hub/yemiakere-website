@extends('master')

@section('title')
    Home | Home
@endsection

@section('content')
<section class="intro mt-3">
    <h1>Welcome to A4C Prod's Cybersecurity Hub!</h1>
    <p>Are you ready to fortify your digital defenses, stay ahead of cyber threats, and master the art of cybersecurity, or do you want to be entertained and thrilled? Our platform is your go-to destination for the latest insights, comprehensive training, entertainment and a community dedicated to safeguarding the digital world.</p>
    @if(!Auth::check())
        <div class="button-container">
            <a style="background-color: #002366 !important;" href="{{route('login')}}" class="btn btn-primary">Login</a>
            <a style="background-color: #002366 !important;" href="{{ route('signup') }}" class="btn btn-primary">Sign Up</a>
        </div>
    @endif

</section>
<section class="features">
    <h2>Why Join Us?</h2>
    <ul>
        <li>Cutting-Edge Content: Stay updated with the latest trends, techniques, and tools in cybersecurity. Our expert articles and tutorials keep you informed and prepared.</li>
        <li>Interactive Learning: Access a wide range of training modules designed for all skill levels. Whether you're a beginner or a seasoned professional, our courses help you hone your skills.</li>
        <li>Community Support: Connect with cybersecurity enthusiasts and professionals. Share your experiences, seek advice, and collaborate on projects that make a difference.</li>
    </ul>
</section>
<section class="featured-reads">
    <h2>Featured Reads</h2>
    <div class="books">
        <div class="book">
            <img src="../../Assets/images/Book1.png" alt="Whispers in the Wires: Shadows Online">
            <h3>Whispers in the Wires: Shadows Online</h3>
            <p>Enter a world where technology and intrigue intertwine in "Whispers in the Wires: Shadows Online." Follow a gripping storyline about Jane as she explores the dark underbelly of cyber warfare and the relentless pursuit of truth. This book is a must-read for those fascinated by the complexities of cybersecurity.</p>
            <a href="https://www.amazon.com/Whispers-Wires-Shadows-AY-Akers-ebook/dp/B0CSCC3RF2/ref=tmm_kin_swatch_0?_encoding=UTF8&dib_tag=se&dib=eyJ2IjoiMSJ9.lcZ9G1KSl5_wKKdMr9eGbciFRSwfr5aggdBXUb7Zajd9H8dvogANFKrj90CnDDZ0.iA3fksOqcgmoHzPT2Ow2Lrq_EhozVZjRZmPZSPrp3As&qid=1720213901&sr=8-2" class="btn">Buy Now</a>
        </div>
        <div class="book">
            <img src="../../Assets/images/Book2.png" alt="The Secret Billionaire's Bargain">
            <h3>The Secret Billionaire's Bargain</h3>
            <p>Explore the high-stakes world of "The Secret Billionaire's Bargain," where wealth, power, and intelligence collide. This tale of intrigue and romance will captivate readers who love a blend of high-tech suspense and emotional depth.</p>
            <a href="https://www.amazon.com/SECRET-BILLIONAIRES-BARGAIN-Y-Akers/dp/B0D6GK81FK/ref=tmm_pap_swatch_0?_encoding=UTF8&dib_tag=se&dib=eyJ2IjoiMSJ9.lcZ9G1KSl5_wKKdMr9eGbciFRSwfr5aggdBXUb7Zajd9H8dvogANFKrj90CnDDZ0.iA3fksOqcgmoHzPT2Ow2Lrq_EhozVZjRZmPZSPrp3As&qid=1720213802&sr=8-1" class="btn">Buy Now</a>
        </div>
    </div>
</section>

@endsection
