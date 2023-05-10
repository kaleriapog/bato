export default function cursor(el) {
    if (!el) return;

    let mouseX = 0;
    let mouseY = 0;
    let elX = 0;
    let elY = 0;
    let elWidth = el.offsetWidth;
    let elHeight = el.offsetHeight;
    let speed = 0.02;
    
    function animate() {
        let distX = mouseX - elX;
        let distY = mouseY - elY;
    
        elX = elX + (distX * speed);
        elY = elY + (distY * speed);
    
        // Check if the element is about to go off-screen
        let maxX = window.innerWidth - elWidth / 2 - 20;
        let maxY = window.innerHeight - elHeight;
    
        if (elX < 0) {
            elX = 0;
        } else if (elX > maxX) {
            elX = maxX;
        }

        el.style.left = elX + "px";
        el.style.top = elY + "px";
    
        requestAnimationFrame(animate);
    }
    
    animate();
    
    document.addEventListener("mousemove", function(event){
        mouseX = event.pageX;
        mouseY = event.pageY;
    });
}