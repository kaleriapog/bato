<style>
	@keyframes preloader_animation {
		0% {
			transform: translateY(0);
		}
		100% {
			transform: translateY(-100%);
		}
	}

	.preloader {
		transition: transform 3s ease;
		display: flex;
		align-items: center;
		justify-content: center;
		position: fixed;
		z-index: 100;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		width: 100vw;
		height: 100vh;
		background-color: #121212;
		overflow: hidden;
	}
	
    .preloader__wrapp {
      position: relative;
    }

	.preloader__wrapp::after {
	  content: "";
	  background-color: rgba(18, 18, 18, 0.5);
	  position: absolute;
	  z-index: 1;
	  left: 0;
	  right: 0;
	  top: 0;
	  bottom: 0;
	  transform: translateY(0);
	}

	.preloader-start {
		animation: preloader_animation 1s cubic-bezier(0.22, 0.17, 0, 0.98) 1.5s forwards;
	}

    .preloader-start .preloader__wrapp::after {
		animation: preloader_animation 1.5s linear forwards;
    }
</style>

<div class="preloader">
    <div class="preloader__wrapp"><?php insertImage('preloader.svg') ?></div>
</div>
<div class="preloader-menu-mob"></div>