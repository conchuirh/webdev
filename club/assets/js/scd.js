$(document).ready(){};

var myDataRef = new Firebase('https://conchuirh.firebaseio.com/scd/news');

function addPost(title, date, desc, content, image) {
	var postRef = myDataRef.push();
	postRef.set({'title' : title, date: date, 'blurb': desc, 'body': content, 'img': image});

	myDataRef.on('child_added', function(snapshot) {
    	var post = snapshot.val();
        addNews(post.title, post.blurb);
    });
}

function addNews(title, blurb) {
	$('<p/>').text(blurb).prepend($('<strong/>').text(title)).appendTo($('#news'));
}

$(".programsNew").popover({ trigger: "hover", title: "Bronze Level Lessons", content: "This is some awesome content"});