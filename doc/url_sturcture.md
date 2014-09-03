
URL ROUTING
-----------

# Plan Url Routing Structure for Public Area

+ GET /				=> home [HomeController]

## Topic [Topic Controller]

+ GET /Topics			=> get/show list all topics
+ GET /Topic:{slug} 	=> get/show timelines post for current topic slug


## Post [PostController]

+ GET /Post:{id}        => get post content by this id
+ GET /Post:{slug}      => get post content by thus post slug

## Bibliography [BibliographyController]

+ GET /Topic:{slug}/Bibliographies	=> get all list references by this topic
+ GET /Post:{slug}/Bibliographies	=> get all list references by this post slug
+ GET /Bibliography:{id} 			=> get detail of this bibliography id

+ GET /Bibliography 	=> get list of all bibliographies in this site


# Plan Url Routing for Member Area

+ GET /{username} 		[HomeController]

## Topic [Topic Controller]

+ GET /{username}/Topics 	=> get/show list all topics by this user

## Post [PostController]

+ GET /{username}/Posts 	=> get list all post article by this user


# Plan Url Routing for Super Duper Administrator

## Users [UserController]

+ GET /Users 		=> get list all users
+ GET /Users:add 	=> show form add user