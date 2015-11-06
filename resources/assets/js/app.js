var SocialFeed = require('./components/SocialFeed.vue');
var Navbar = require('./components/Navbar.vue');
var AvatarBox = require('./components/AvatarBox.vue');
var PostStatus = require('./components/PostStatus.vue');
var moment = require('moment');

export default {
	data: {
		currentUserID: 1,
		posts: [
	    	{
		        "user": 2,
		        "content": "hello world",
		        "date": "2015-11-03T17:37:17.746Z",
		        "comments": [
			        {
			        	message: "m9",
			        	user: 1,
			        	date: moment()
			        },
		        ],
		        liked: false,
		        newComment: "",
		    }
		],
		users: {
		    1: {
		    	id: 1,
		        email: 'test@test.com',
		        username: 'test',
		        name: 'M8',
		        imgpath: '/images/default-avatar.png',
		    },
		    2: {
		    	id: 2,
		        email: 'jimmy.cook.1993@gmail.com',
		        username: 'jimmycook',
		        name: 'Jimmy Cook',
		        imgpath: '/images/default-avatar.png',
		    }
		}
	},
	computed: {
		currentUser: function() {
			return this.users[this.currentUserID];
		},
	},
    components: {
        'feed': SocialFeed,
        'navbar': Navbar,
        'avatar-box': AvatarBox,
        'post-status': PostStatus,
    },
}