@extends('master');

@section('title')
    Books | Books
@endsection

@section('content')

    <section class="book-intro">
        <h1>Featured Books</h1>
        <p>Explore our collection of must-read books on cybersecurity and high-tech intrigue. Each book is carefully selected to provide you with insights and entertainment.</p>
    </section>
    <section class="featured-books">
        <h2>Our Top Picks</h2>
        <div class="top-picks">
            <div class="book">
                <img src="../../Assets/images/Book1.png" alt="Whispers in the Wires: Shadows Online">
                <h3>Whispers in the Wires: Shadows Online</h3>
                <p>Enter a world where technology and intrigue intertwine in "Whispers in the Wires: Shadows Online." Follow a gripping storyline about Jane as she explores the dark underbelly of cyber warfare and the relentless pursuit of truth. This book is a must-read for those fascinated by the complexities of cybersecurity.</p>
                <a href="https://www.amazon.com/Whispers-Wires-Shadows-Online/dp/B08XYZ1234" class="btn">Buy Now</a>
            </div>
            <div class="book">
                <img src="../../Assets/images/Book2.png" alt="The Secret Billionaire's Bargain">
                <h3>The Secret Billionaire's Bargain</h3>
                <p>Explore the high-stakes world of "The Secret Billionaire's Bargain," where wealth, power, and intelligence collide. This tale of intrigue and romance will captivate readers who love a blend of high-tech suspense and emotional depth.</p>
                <a href="https://www.amazon.com/Secret-Billionaires-Bargain/dp/B08XYZ5678" class="btn">Buy Now</a>
            </div>
        </div>

    </section>

    <section class="book-intro">
        <h1>Coming Soon</h1>
        <p>Be on the lookout for future books on cybersecurity education. Each book promises details that will get you up and running in your cyber journey.</p>
    </section>
    <section class="featured-books coming-soon">
        <div class="book">
            <img src="../../Assets/images/Book3.png" alt="Securing Tomorrow - A Narrative Guide to Building a Security Program">
            <h3>Securing Tomorrow - A Narrative Guide to Building a Security Program</h3>
            <p>"Securing Tomorrow" provides a comprehensive guide to building a robust security program. Ideal for cybersecurity professionals looking to enhance their knowledge and skills.</p>
            <a href="#" class="btn">Buy Now</a>
        </div>
        <div class="book">
            <img src="../../Assets/images/Book4.png" alt="From Campus to Cybersecurity: A College Student's Guide to SOC Operations">
            <h3>From Campus to Cybersecurity: A College Student's Guide to SOC Operations</h3>
            <p>This guide is perfect for college students aspiring to enter the field of cybersecurity. Learn how to build a Security Operations Center (SOC) and become a vital part of your organization's defense team.</p>
            <a href="#" class="btn">Buy Now</a>
        </div>
    </section>


@endsection

