<!-- resources/views/partials/footer.blade.php -->

<footer>
    <div class="container">
        <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
        <ul>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/privacy">Privacy Policy</a></li>
        </ul>
    </div>
</footer>

<!-- Add your CSS for styling the footer here or in your main CSS file -->
<style>
    footer {
        background-color: #f8f9fa;
        padding: 20px;
        text-align: center;
        border-top: 1px solid #e7e7e7;
    }
    footer .container {
        max-width: 1200px;
        margin: 0 auto;
    }
    footer ul {
        list-style: none;
        padding: 0;
    }
    footer ul li {
        display: inline;
        margin: 0 10px;
    }
    footer ul li a {
        text-decoration: none;
        color: #007bff;
    }
    footer ul li a:hover {
        text-decoration: underline;
    }
</style>
