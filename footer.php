
    </section>
    <footer>
        <section class="container-footer">
            <div class="footer-left">
                <h3>This is Left</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, tempore porro nam, fugit
                    deserunt, dolorem sit placeat mollitia corrupti voluptatibus quae
                    totam asperiores expedita provident?</p>
            </div>
            <div class="footer-right">
                <h3>This is Right</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, tempore porro nam, fugit
                    deserunt, dolorem sit placeat mollitia corrupti voluptatibus quae
                    totam asperiores expedita provident?</p>
            </div>
        </section>
    </footer>
    <script>
        burger = document.querySelector('.burger')
        navbar = document.querySelector('.navbar')
        navList = document.querySelector('.nav-list')
        
        burger.addEventListener('click', ()=>{
            navList.classList.toggle('v-class-resp');
            navbar.classList.toggle('h-nav-resp');

        })   
    </script>
</body>
</html>