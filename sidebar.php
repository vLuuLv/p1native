<div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">SPP.LuuL</div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
        <li>
            <a href="index.php" class='a <?= $title === "Home | Peduli Diri" ? 'open1' : ''; ?>'>
                <i class='bx bx-home  <?= $title === "Home | Peduli Diri" ? 'open1' : ''; ?>'></i>
                <span class="links_name  <?= $title === "Home | Peduli Diri" ? 'open1' : ''; ?>">Home</span>
            </a>
            <span class="tooltip  <?= $title === "Home | Peduli Diri" ? 'open1' : ''; ?>">Home</span>
        </li>
        <li>
            <a href="catatan.php" class='a <?= $title === "Catatan Perjalanan | Peduli Diri" ? 'open1' : ''; ?>'>
                <i class='bx bx-book  <?= $title === "Catatan Perjalanan | Peduli Diri" ? 'open1' : ''; ?>'></i>
                <span class="links_name  <?= $title === "Catatan Perjalanan | Peduli Diri" ? 'open1' : ''; ?>">Catatan</span>
            </a>
            <span class="tooltip  <?= $title === "Catatan Perjalanan | Peduli Diri" ? 'open1' : ''; ?>">Catatan</span>
        </li>
        <li class="profile">
            <form action="logout.php" method="POST">
                <button class="btn" type="submit">
                    <div class="profile-details">
                        <div class="name_job">
                            <div class="name"></div>
                        </div>
                    </div>
                    <div class="name">
                        <p class="text-end me-3 mt-1">Logout
                        <p>
                    </div>
                    <i class='bx bx-log-out' id="log_out" href="/logout"></i>
                </button>
            </form>
        </li>
    </ul>
</div>