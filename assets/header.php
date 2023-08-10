<header>
    <nav>
        <ul>
            <li><a href="./index.php" class="<?=  str_contains(getFullUrl(), "index.php") ? "active" : "" ?>">Home</a></li>
            <li><a href="./firstPage.php" class="<?=  str_contains(getFullUrl(), "firstPage.php") ? "active" : "" ?>">First page</a></li>
            <li><a href="./secondPage.php" class="<?=  str_contains(getFullUrl(), "secondPage.php") ? "active" : "" ?>">Second page</a></li>
        </ul>
    </nav>
</header>