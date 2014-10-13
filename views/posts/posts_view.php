<?foreach ($tags as $tag):?><a href="#"><span class="label label-info"<?=$tag['tag_name']?> </span></a><?endforeach?>
<div class="span8">
   <h1> <?=$post['post_subject']?> </h1>
    <p> <?=$post['post_text']?> </p>
    <div>
        <span class="badge badge-success"><?=$today = date("F j, Y, g:i a"); ?></span><div class="pull-right"><span class="label">alice</span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div>
    </div>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="panel panel-default widget">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-comment"></span>
                <h3 class="panel-title">
                    Recent Comments</h3>
                <span class="label label-info">
                    78</span>
            </div>
            <div class="commentBox">
                <ul class="commentList">
                    <? foreach ($comments as $comment): ?>
                        <li>
                            <div class="commenterImage">
                                <img src="http://a.deviantart.net/avatars/c/h/chaoscontract.gif?1" />
                            </div>
                            <div class="commentText">
                                <?=$comment['comment_created']?>
                                <?=$comment['comment_author']?>
                                <p><?=$comment['comment_text']?></p>
                            </div>
                        </li>
                    <? endforeach ?>
                </ul>
                <form class="form-inline" method="post" role="form">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Your comments" name="data[comment_text]"/>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default" type="submit">Add</button>
                    </div>
                </form>
            </div>


                </ul>

            </div>
        </div>
    </div>
</div>


