<?php 
include("header.php");
include("nav.php");
 ?>  
      <main>
        <content>
          <article>
            <h2>Mapa</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2808.797970170023!2d19.840143215227723!3d45.25187797909903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475b106a37670cd3%3A0x7d20485eb60b629f!2z0KLRgNCzINC80LvQsNC00LXQvdCw0YbQsCwg0J3QvtCy0Lgg0KHQsNC0!5e0!3m2!1ssr!2srs!4v1484058438922" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </article>
          
          <article>
            <h2>Formular</h2>
            <form>
              <label>Ime i prezime:</label>
              <input name="ime" type="text" /><br />
              <label>E-mail:</label>
              <input name="mail" type="mail" /><br />
              <label>Tekst:</label><br />
              <textarea name="poruka" cols="50" rows="6"></textarea><br />
              
              <input type="submit" value="Pošalji" />
              
              
            </form>
            
          </article>
        </content>
        
        <?php include("aside.php"); ?>
      </main>
      
<?php include("footer.php"); ?> 