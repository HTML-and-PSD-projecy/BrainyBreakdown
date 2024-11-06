<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Display</title>
    <link rel="stylesheet" href="feed.css">
</head>
<body>
    <div>
        <div class="search-container">
            <input type="text" id="searchBar" placeholder="Search articles..." class="search-bar">
        </div>
        <div class="filters">
            <div class="count-filters">
                <button id="filterLikes">Most Liked</button>
                <button id="filterViews">Most Viewed</button>
                <button id="filterComments">Most Commented</button>
            </div>
        </div>

        <div class="article" data-article-id="1">
            <h2>ELECTION UPDATE</h2>
            <p>US Election Results 2024 LIVE Updates: Donald Trump sweeps Red States, Kamala Harris closes gap with 109 electoral votes</p>
            <img src="election.jpg" alt="Thumbnail" class="thumbnail">
            <div class="interactions">
                <button class="like-button">Like</button>
                <span class="likes">Likes: <span class="like-count">0</span></span>
                <span class="views">Views: <span class="view-count">0</span></span>
                <span class="comments">Comments: <span class="comment-count">0</span></span>
                <button class="comment-toggle">Show Comments</button>
            </div>
            <div class="comments-section" style="display: none;">
                <input type="text" class="comment-input" placeholder="Add a comment...">
                <button class="comment-button">Submit Comment</button>
                <div class="comment-list"></div>
            </div>
        </div>

        <div class="article" data-article-id="2">
            <h2>Weather Update</h2>
            <p>Air quality remains in ‘very poor’ category in Delhi-NCR</p>
            <img src="delhi.jpg" alt="Thumbnail" class="thumbnail">
            <div class="interactions">
                <button class="like-button">Like</button>
                <span class="likes">Likes: <span class="like-count">0</span></span>
                <span class="views">Views: <span class="view-count">0</span></span>
                <span class="comments">Comments: <span class="comment-count">0</span></span>
                <button class="comment-toggle">Show Comments</button>
            </div>
            <div class="comments-section" style="display: none;">
                <input type="text" class="comment-input" placeholder="Add a comment...">
                <button class="comment-button">Submit Comment</button>
                <div class="comment-list"></div>
            </div>
        </div>
        <div class="article" data-article-id="3">
            <h2>R.I.P Liam Payne</h2>
            <p>Liam Payne No More: One Direction Star Was 'Carried to His Hotel Room' Hours Before His Death</p>
            <img src="image3.jpg" alt="Thumbnail" class="thumbnail">
            <div class="interactions">
                <button class="like-button">Like</button>
                <span class="likes">Likes: <span class="like-count">0</span></span>
                <span class="views">Views: <span class="view-count">0</span></span>
                <span class="comments">Comments: <span class="comment-count">0</span></span>
                <button class="comment-toggle">Show Comments</button>
            </div>
            <div class="comments-section" style="display: none;">
                <input type="text" class="comment-input" placeholder="Add a comment...">
                <button class="comment-button">Submit Comment</button>
                <div class="comment-list"></div>
            </div>
        </div>
        <div class="article" data-article-id="4">
            <h2>Artificial Intelligence</h2>
            <p>OpenAI in talks with California to become for-profit company</p>
            <img src="ai.jpg" alt="Thumbnail" class="thumbnail">
            <div class="interactions">
                <button class="like-button">Like</button>
                <span class="likes">Likes: <span class="like-count">0</span></span>
                <span class="views">Views: <span class="view-count">0</span></span>
                <span class="comments">Comments: <span class="comment-count">0</span></span>
                <button class="comment-toggle">Show Comments</button>
            </div>
            <div class="comments-section" style="display: none;">
                <input type="text" class="comment-input" placeholder="Add a comment...">
                <button class="comment-button">Submit Comment</button>
                <div class="comment-list"></div>
            </div>
        </div>
        <div class="article" data-article-id="5">
            <h2>KreG AI</h2>
            <p>Aman is our A.I.</p>
            <img src="image5.jpg" alt="Thumbnail" class="thumbnail">
            <div class="interactions">
                <button class="like-button">Like</button>
                <span class="likes">Likes: <span class="like-count">0</span></span>
                <span class="views">Views: <span class="view-count">0</span></span>
                <span class="comments">Comments: <span class="comment-count">0</span></span>
                <button class="comment-toggle">Show Comments</button>
            </div>
            <div class="comments-section" style="display: none;">
                <input type="text" class="comment-input" placeholder="Add a comment...">
                <button class="comment-button">Submit Comment</button>
                <div class="comment-list"></div>
            </div>
        </div>
    </div>
    
    <script src="dummy-feed.js"></script>
</body>
</html>