
URL ROUTING
-----------

# Plan Url Routing Structure for Public Area

+ `GET /`		=> home [HomeController]



## Topic [Topic Controller]

+ `GET /Topics`					=> get/show list all topics
+ `GET /Topic:{topic_slug}` 	=> get/show timelines post for current topic slug

+ `GET /Topic:{topic_slug}/Branch:{branch_slug_1}:{branch_slug_2}:{branch_slug_n}`



## Post [PostController]

+ `GET /Topic:{topic_slug}/Post:{post_slug}` 	=> get post content by thus post slug



## Bibliography [BibliographyController]

+ `GET /Topic:{topic_slug}/Bibliographies`		=> get all list references by this topic
+ `GET /Post:{topic_slug}/Bibliographies`		=> get all list references by this post slug
+ `GET /Bibliography:{bibliography_id}` 		=> get detail of this bibliography id

+ `GET /Bibliographies` 						=> get list of all bibliographies in this site



## Search [SearchController]

+ `GET /Search?t={keyword}` 		=> get search results


# Plan Url Routing for Member Area

+ `GET /{username}` 		[HomeController]



## Topic [TopicController]

+ `GET /{username}/Topics` 			=> get/show list all topics by this user

+ `GET /Topic:{topic_slug}` 		=> get/show timelines post for current topic slug (sama seperti public area)
+ `GET /Topic/Create`				=> open form create new
+ `POST /Topic` 					=> save new topic
+ `GET /Topic:{topic_slug}/Edit`	=> edit selected topic
+ `UPDATE /Topic:{topic_id}` 		=> update topic
+ `DELETE /Topic:{topic_id}` 		=> delete topic



## Branch [BranchController]

+ `GET /Topic:{topic_slug}/Branches` 				=> get list of branch of this topic
+ `POST /Topic:{topic_slug}/Branch`					=> ...
+ `UPDATE /Topic:{topic_slug}/Branch:{branch_id}`	=> ...
+ `DELETE /Topic:{topic_slug}/Branch:{branch_id}`	=> ...



## Post [PostController]

+ `GET /{username}/Posts` 						=> get list all post article by this user

+ `GET /Topic:{topic_slug}/Posts`				=> ...
+ `GET /Topic:{topic_slug}/Post:{post_slug}` 	=> ...
+ `POST /Topic:{topic_slug}/Post` 				=> ...
+ `UPDATE /Topic:{topic_slug}/Post:{post_id}` 	=> ...
+ `DELETE /Topic:{topic_slug}/Post:{post_id}` 	=> ...



## User [UserController]

+ `GET /{username}/Profile`		=> ...
+ `UPDATE /{username}/Profile`	=> ...
+ `DELETE /{username}/Profile`	=> ...


# Plan Url Routing for Super Duper Administrator

## Users [Admin\UserController]

+ `GET /Users` 		=> get list all users
+ `GET /Users:add` 	=> show form add user