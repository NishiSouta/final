<script>
    function func1(event, e) {
    e.classList.toggle("active");
    event.stopPropagation();
}

function changeCategory(event, categoryName) {
    event.preventDefault();
    window.location.href = 'category.php?Category_name=' + encodeURIComponent(categoryName);
}

        document.addEventListener("DOMContentLoaded", function () {
            var categoryLinks = document.querySelectorAll('.left-menu ul li.parent a');
            categoryLinks.forEach(function (link) {
                link.addEventListener('click', function (event) {
                    event.preventDefault();
                    var parentLi = this.parentElement;
                    parentLi.classList.toggle('active');
                });
            });
        });
    </script>
</body>
</html>