<?php
global $username;
?>
<!-- Include the library. -->
<script
    src="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.min.js"
></script>

<!-- Optionally, include the theme (if you don't want to struggle to write the CSS) -->
<link
    rel="stylesheet"
    href="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.css"
/>

<style>
    .calendar::after {
        content: '';
    }
</style>

<!-- Prepare a container for your calendar. -->
<div class="calendar">
    <!-- Loading stuff -->
    Loading the data just for you.
</div>

<script>
    GitHubCalendar(".calendar", "<?php echo $username ?>");
</script>
