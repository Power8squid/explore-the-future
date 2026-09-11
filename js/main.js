// Scroll till toppen när man klickar på scroll-up-knappen
document.addEventListener("DOMContentLoaded", function() {
    const scrollUpButton = document.getElementById('scrollUpButton');

    // Mjuk scrollning när man klickar på länkarna i innehållsförteckningen
    document.querySelectorAll('.toc a').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault(); // Måste vara först!
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    window.onscroll = function() {
        if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
            scrollUpButton.style.display = "block";
        } else {
            scrollUpButton.style.display = "none";
        }
    };

    scrollUpButton.onclick = function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    };

    // Uppdatera länktext med rubrikens text
    const tocItems = document.querySelectorAll('.toc a');
    tocItems.forEach(function(item) {
        const sectionId = item.getAttribute('href');
        const heading = document.querySelector(sectionId);
        if (heading) {
            item.textContent = heading.textContent;
        }
    });
});
