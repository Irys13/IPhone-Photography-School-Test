<template>
 <div class="BlogPost">
    <h1 class="BlogPost__title">10 Best Photo Apps For Incredible
    iPhone Photography (2020 Edition)</h1>

    <hr class="BlogPost__divider">

    <p class="BlogPost__content">How do you capture more
    interesting travel photos with your iPhone? How do you avoid
    taking the same cliché vacation photos that everyone else
    takes? I recently interviewed Steffen Geldner – a talented
    iPhone photographer with a passion for travel. In this
    article, Steffen reveals 7 tips for shooting beautiful travel
    photos that will preserve the amazing memories of your trip.
    Read on to discover how to take better travel photos with your
    iPhone!</p>

    <img class="BlogPost__image" src="images/blog-image.png">

    <h2 class="BlogPost__subtitle">1. Research Your Destination To
    Find The Best Photo Opportunities</h2>

    <p class="BlogPost__content">Before your trip, I recommend
    researching the destination to find the most interesting photo
    opportunities.</p>
    <p class="BlogPost__content">I always research the location I’m traveling to. I do this
    extensively and obsessively!</p>
    <p class="BlogPost__content">It’s up to you how much research you do. But you should
    definitely spend a bit of time looking up some great places
    to take pictures.</p>
    <p class="BlogPost__content">So, what kind of research can you do?</p>
    <p class="BlogPost__content">First, you could search for photos that other people have
    taken at the locations you’re planning to visit.</p>
    <p class="BlogPost__content">Search on Instagram or Google to get an idea of the kinds
    of photos people take there.</p><br><br>

    <h2 class="BlogPost__subtitle">2. Capture Your Journey To Tell
    The Complete Story Of Your Travels</h2>

    <p class="BlogPost__content">Travel photography isn’t just
    about photographing the destination.</p>
    <p class="BlogPost__content">For a more complete photographic story, capture your journey
    to and from the location you’re visiting.</p>
    <p class="BlogPost__content">If you’re traveling by plane, try to get a window seat where
    you have a view of the wing or propeller.</p>
    <p class="BlogPost__content">And of course, you could capture a beautiful aerial view of
    clouds, mountains, or city lights as you’re flying above.</p>
    <p class="BlogPost__content">Your journey will often involve several different types of
    transport. And they all offer great photo opportunities.</p>
    <p class="BlogPost__content">Whether you’re traveling by car, taxi, bus, train, boat, or
    plane, try to capture some interesting photos.</p>
    </div>
</template>

<style lang="scss">
@import 'resources/sass/css-reset';
@import 'resources/sass/variables';
@import 'resources/sass/general-styling';

.BlogPost {
    display: inline-block;
    margin-right: 70px;
    width: 560px;
}

.BlogPost__title {
    font-family: 'Lato', sans-serif;
    font-size: 26px;
    font-style: normal;
    font-weight: bold;
}

.BlogPost__divider {
    background: linear-gradient(90deg, $gradient-background 0.83%, $gradient-background-secondary 100%);
    border: 0;
    height: 1px;
    margin: 16px 0 45px;
}

.BlogPost__content {
    font-size: 16px;
    font-weight: 300;
    line-height: 24px;
    margin-bottom: 15px;
}

.BlogPost__image {
    margin: 28px 0 44px;
}

.BlogPost__subtitle {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 15px;
}
</style>
