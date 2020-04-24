<template>
    <div class="body-container">
        <div class="body-top-container">
            <br>
            <h1 id="head"><strong> An amazing APP that does it ALL! </strong></h1>
            <br>
            <h4 id="topL1"> Get more #followers  </h4>
            <h4 id="topR1"> Build #connections </h4>
            <img src="images/logo.png" style="width:450px; height:450px" alt="tweetbody-logo">
            <h4 id="bottomL2">Increase #engagement </h4>
            <h4 id="bottomR2"> Expand your #brand </h4>
        </div>

        <div class="body-para-container">
            <p> "We find ways in connecting people”, that's the objective of the Tweeter founder, Ms. Lana Lang. Ms. Lang landed in New Jersey, USA in 1990.
                She was an exchange student at HGM University.  Being a foreigh student and new to the country she was having a hard time coping up with homesickness.
                So  in 1993, on her last year as a Computer Science student in the university she came up with an idea of making an app that would connect people from different parts of the world.
                Together with her two best friends, they founded Tweeter.

            </p>

            <p> Today Tweeter, has been widely use worldwide and it has a 10 million users and counting.</p>

        </div>

        <div class="body-col-container">
            <div class="row">
                <div id="content-1" class="col-2">
                    <h4>How to get more followers on Tweeter</h4>
                    <ul >
                        <li>Promote your dedicated hashtag on your social profiles.</li>
                        <li>Get creative with your hashtag. Be funny, ironic or outrageous - but never boring.</li>
                        <li>Interact with top influencers in your space and try to be their favorite brand.</li>
                        <li>Find clever ways to get people to share your content.</li>
                    </ul>
                </div>

                <div id="content-2" class="col-2">
                    <h4>Ways to build connections on Tweeter</h4>
                    <ul >
                        <li>Use emotions to make your content reach more people.</li>
                        <li>Slide into direct messages (DM).</li>
                        <li>Go Ham on HASHTAGS!</li>
                        <li>Tag a friend.</li>
                        <li>Explore and Discover.</li>
                    </ul>
                </div>

                <div id="content-3" class="col-2">
                    <h4>Strategies to Increase your Tweeter Engagement</h4>
                    <ul >
                        <li>Engage with other users content.</li>
                        <li>Retweet other users’ Tweets.</li>
                        <li>Share a variety of Links.</li>
                        <li>Always use Hashtags.</li>
                        <li>Don’t tweet too much.</li>
                        <li>Use clean and straight forward language.</li>
                        <li>Ask questions.</li>
                        <li>Retweet great content.</li>
                    </ul>
                </div>

                <div id="content-4" clas="col-2">
                    <h4>How to get more followers on Tweeter</h4>
                    <ul >
                        <li>Share good content content consistently.</li>
                        <li>Monitor hashtag in your market.</li>
                        <li>Hold a contest with another account.</li>
                        <li>Don’t buy followers.</li>
                        <li>Promote your account.</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</template>


<script>
export default {
    name: 'MSBody'

}
</script>


<style scoped>

.body-container {
        display: grid;
        grid-template-columns: auto;
        grid-template-rows: auto auto auto;
        padding: 10px;

}

.body-container {
        display: grid;
        grid-template-columns: auto;
        grid-template-rows: auto auto;
        justify-content: center;
        justify-items: center;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 1rem;
        margin: 10px;
}

.body-para-container {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: 1fr;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 1rem;
        text-align: left;
        margin: 10px;
}

.body-col-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr 1fr;
        margin: 10px;
        padding: 10px;
        box-sizing: border-box;
}

#content-1 {
        margin-left: 10px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 1rem;
        text-align: left;



}

#content-2 {
        margin-left: 40px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 1rem;
        text-align: left;


}

#content-3 {
        margin-left: 10px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 1rem;
        text-align: left;

}

#content-4 {
        margin-left: 50px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 1rem;
        text-align: left;

}




</style>
