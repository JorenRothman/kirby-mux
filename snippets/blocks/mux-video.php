<?php

$videos = $block->content()->get('video');

$id = str_replace('-', '_', $block->id());

foreach ($page->videos($videos) as $video) {
    $mux = json_decode($video->mux(), true);
    $videoID = reset($mux['playback_ids'])['id'];
}
?>

<script defer src="https://unpkg.com/@mux-elements/mux-player"></script>

<div id="mux-<?= $id ?>" class="mux-video">
    <figure class="mux-video__figure">
        <mux-player stream-type="on-demand" playback-id="<?= $videoID ?>" thumbnailTime="<?= $block->content()->get('thumbnail') ?>" metadata-video-title="Test video title"></mux-player>

        <figcaption class="mux-video__caption">
            <?= $block->content()->get('caption'); ?>
        </figcaption>
    </figure>
</div>
