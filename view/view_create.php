<form action="index.php?ctrl=basex&action=modify" method="POST" >

    <label>Marke</label><br />
        <select name="shoebrand" ref="shoebrand" required="required" >
            <option value=""></option>
            <option value="Aldo">Aldo</option>
            <option value="Adidas">Adidas</option>
            <option value="Airwalk">Airwalk</option>           
            <option value="Ben Sherman">Ben Sherman</option>
            <option value="Benetton">Benetton</option>
            <option value="edc by esprit">edc by esprit</option>
            <option value="Etnies">Etnies</option>
            <option value="Hunter">Hunter</option>
            <option value="JOOP">JOOP</option>
            <option value="Kappa">Kappa</option>
            <option value="K-Swiss">K-Swiss</option>
            <option value="Louboutin">Louboutin</option>
            <option value="Mexx">Mexx</option>
            <option value="Skechers">Skechers</option>
            <option value="Wrangler">Wrangler</option>
        </select><br />

    <label>Modell</label><br />
    <input name="shoemodel" ref="shoemodel" type="text" size="45" required="required" /><br />

    <label>Typ<br /></label>
        <select name="shoetype" ref="shoetype" required="required" >
            <option value=""></option>
            <option value="Badeschuhe">Badeschuhe</option>
            <option value="Ballerinas">Ballerinas</option>
            <option value="Halbschuhe">Halbschuhe</option>
            <option value="Hausschuhe">Hausschuhe</option>
            <option value="High Heels">High Heels</option>
            <option value="Outdoor Schuhe">Outdoor Schuhe</option>
            <option value="Pantoletten">Pantoletten</option>
            <option value="Pumps">Pumps</option>
            <option value="Sandalen">Sandalen</option>
            <option value="Schnuerschuhe">Schnuerschuhe</option>
            <option value="Sneaker">Sneaker</option>
            <option value="Sportschuhe">Sportschuhe</option>
            <option value="Stiefel">Stiefel</option>
            <option value="Stiefeletten">Stiefeletten</option>
        </select><br />

    <label>Farbe</label><br />
        <select name="shoecolor" ref="shoecolor" required="required" >
            <option value=""></option>
            <option value="Anthrazit">Anthrazit</option>
            <option value="Blau">Blau</option>
            <option value="Gelb">Gelb</option>
            <option value="Grau">Grau</option>
            <option value="Gruen">Gruen</option>
            <option value="Helblau">Helblau</option>
            <option value="Rosa">Rosa</option>
            <option value="Rot">Rot</option>
            <option value="Schwarz">Schwarz</option>
            <option value="Silber">Silber</option>
            <option value="Weiss">Weiss</option>
        </select><br />

    <label>Groesse</label><br />
        <select name="shoesize" ref="shoesize" required="required" >
            <option value=""></option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
            <option value="45">45</option>
            <option value="46">46</option>
            <option value="47">47</option>
            <option value="48">48</option>
            <option value="49">49</option>
            <option value="50">50</option>
        </select><br />
    
    <label>Absatzhoehe (cm)</label><br />
        <select name="shoeheel" ref="shoeheel" required="required" >
            <option value=""></option>
            <option value="0">0</option>
            <option value="0.5">0.5</option>
            <option value="1">1</option>
            <option value="1.5">1.5</option>
            <option value="2">2</option>
            <option value="2.5">2.5</option>
            <option value="3">3</option>
            <option value="3.5">3.5</option>
            <option value="4">4</option>
            <option value="4.5">4.5</option>
            <option value="5">5</option>
            <option value="5.5">5.5</option>
            <option value="6">6</option>
            <option value="6.5">6.5</option>
            <option value="7">7</option>
        </select><br />
    
        <label>Ablage-Ort</label><br />
        <select name="shoestorage" ref="shoestorage" id="select">
            <option value=""></option>
            <option value="Schuhschrank 1">Schuhschrank 1</option>
            <option value="Schuhschrank 2">Schuhschrank 2</option>
            <option value="Keller 1">Keller 1</option>
            <option value="Keller 2">Keller 2</option>
            <option value="Keller 3">Keller 3</option>
        </select><br />
                
    <label>Notiz</label><br />
    <textarea name="shoenotice" ref="shoenotice"></textarea><br />
    
    <br />
    <input type="submit" value="Speichern" />

</form>		