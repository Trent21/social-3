var moment = require('moment');
var SocialFeed = require('./components/SocialFeed.vue');
var Navbar = require('./components/Navbar.vue');
var AvatarBox = require('./components/AvatarBox.vue');
var PostStatus = require('./components/PostStatus.vue');
var FriendsList = require('./components/FriendsList.vue');
var Login = require('./components/Login.vue');
var Register = require('./components/Register.vue');
var PageFooter = require('./components/PageFooter.vue');
var MessagesFeed = require('./components/MessagesFeed.vue');

export default {
	components: {
        'feed': SocialFeed,
        'navbar': Navbar,
        'avatarbox': AvatarBox,
        'poststatus': PostStatus,
        'friendslist': FriendsList,
        'login': Login,
        'register': Register,
        'pagefooter': PageFooter,
        'messagesfeed': MessagesFeed,
    },
	data: {
		currentUserID: 2,
		posts: [
	    	{
		        "user": 2,
		        "content": "hello world",
		        "date": "2015-11-03T17:37:17.746Z",
		        "comments": [
			        {
			        	message: "hi!",
			        	user: 1,
			        	date: moment()
			        },
		        ],
		        liked: false,
		        newComment: "",
		    },
		    {
		        "user": 2,
		        "content": "goodbye world",
		        "date": "2015-11-03T17:37:17.746Z",
		        "comments": [
			        {
			        	message: "bye...",
			        	user: 2,
			        	date: moment()
			        },
		        ],
		        liked: false,
		        newComment: "",
		    },

		],
		users: {
		    1: {
		    	id: 1,
		        email: 'test@test.com',
		        username: 'user',
		        name: 'John Doe',
		        imgpath: '/images/default-avatar.png',
		    },
		    2: {
		    	id: 2,
		        email: 'jimmy.cook.1993@gmail.com',
		        username: 'jimmycook',
		        name: 'Jimmy Cook',
		        imgpath: '/images/default-avatar.png',
		    }
		},
		messages: [
			{
				users[1, 2],
				[ 
					{
						user: 1,
						message: "Hi",
					},
					{
						user: 2,
						message: "Hello",
					},
				],
			},
		]
	},
	computed: {
		currentUser: function() {
			return this.users[this.currentUserID];
		},
	},
	methods: {

	}
}