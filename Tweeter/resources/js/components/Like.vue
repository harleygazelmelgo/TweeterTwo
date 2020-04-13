<template>
    <div>
        <h3>{{tweet_id}}</h3>
        <h1 v-if="checkTweet()">You've like this tweet!</h1>
        <h1 v-else>Like this tweet!</h1>
    </div>
</template>

<script>
export default {
    name: "Like",
    data: function() {
        return {
            likeslist: [],
            state: {
                default: false,
            }
        }
    },
    props: {
        tweetid: Number,
    },
    methods: {
        checkTweet: function () {
            var state = fasle;
            this.likeslist.forEach((like) => {
                console.log(like.tweet_id, this.tweetid);
                if(like.tweet_id == this.tweetid) { // you've already like this.
                    state = true;
                }
            })
            return state;
        },
        getUsersLikes: function() {
            axios.get('/like')
            .then(response => {
                //console.log(response.data);
                this.likeslist = response.data.like;
            })
            .catch(error => {
                console.log(error);
                this.quote = "Error getting the computer move";
            })
        },
    }

}
</script>

<style scoped>

</style>
