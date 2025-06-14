<?php

add_shortcode('calculation', 'calculation_fun');

function calculation_fun(){
    ?>

    <div class="main_container">
        <div class="numbers">
            <h5 id="value">31,60<span>€</span></h5>
            <p>Benutzer/Monat</p>
        </div>
        <div class="pro_incrimant">
            <div class="price">
                <h4>Anzahl:</h4>
            </div>
            <div class="value_btn">
                <button class="minus">-</button>
                <span id="number">1</span>
                <button class="plus">+</button>
            </div>
        </div>
    </div>

    <div class="tab_btn">
        <div class="onl_btn">
            <h4>Erstgespräch</h4>
        </div>
        <div class="tab">
            <button id="tab_button">Optionale<br>Features</button>
        </div>
    </div>

    <div class="tab_model" id="tab_value">
        <div class="tab_content">
            <div class="icon">
                <div class="toggle"></div>
            </div>
            <div class="btn_value">
                <h4>Mailverschlüsselung</h4>
                <span id="first_toggle_btn_value">1,40 €</span><span>Benutzer/Monat</span>
            </div>
        </div>
        <div class="tab_content">
            <div class="icon">
                <div class="toggle"></div>
            </div>
            <div class="btn_value">
                <h4>Erweiterter Spamschutz</h4>
                <span id="second_toggle_btn_value">1,30 €</span><span>Benutzer/Monat</span>
            </div>
        </div><div class="tab_content">
            <div class="icon">
                <div class="toggle"></div>
            </div>
            <div class="btn_value">
                <h4>Mailarchiv</h4>
                <span id="third_toggle_btn_value">1,20 €</span><span>Benutzer/Monat</span>
            </div>
        </div>
    </div>


    <script>

        document.getElementById("tab_button").addEventListener("click", tab_toggle);
        function tab_toggle() {
            var x = document.getElementById("tab_value");
            if (x.style.display === "none" || x.style.display === "") {
                x.style.display = "block";
            }
            else {
                x.style.display = "none";
            }
        }


        // toggle button
        const toggles = document.querySelectorAll('.toggle');
        toggles.forEach(toggle => {
            toggle.addEventListener('click', () => {
                toggle.classList.toggle('on');
                const numberElement = document.getElementById("value");
                const valueElement = document.getElementById("first_toggle_btn_value");

                if (toggle.classList.contains('on')) {
                    numberElement.textContent = "hii";
                }
                else {
                    numberElement.textContent = "byy";
                }
            });
        });


        // increase And decrease value
        
        const minus = document.querySelector('.minus');
        const plus = document.querySelector('.plus');
        const numberElement = document.getElementById("number");
        const valueElement = document.getElementById("value");
        const static_value = 31.60;

        plus.addEventListener('click', () => {
            numberElement.textContent++;
            increase();
        });

        minus.addEventListener('click', () => {
            if (numberElement.textContent > 1) {
                numberElement.textContent--;
                decrease();
            }
        });

        function increase() {
            const initialValue = parseFloat(valueElement.textContent.replace(',', '.').replace('€', ''));
            const newValue = (initialValue + static_value).toFixed(2);
            valueElement.textContent = newValue.replace('.', ',') + "€";
        }

        function decrease() {
            const initialValue = parseFloat(valueElement.textContent.replace(',', '.').replace('€', ''));
            const newValue = (initialValue - static_value).toFixed(2);
            valueElement.textContent = newValue.replace('.', ',') + "€";
        }

    </script>

    <?php
}
