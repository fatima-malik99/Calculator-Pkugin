<?php
// Plugin Name: Simple Calculator Customized
//Description: This plugin will perform basic arithematic operators.
//Author: Fatima Malik
//Author URI: www.linkedin.com/in/fatima-malik99
//Version: 1.0.0
//Text Domain: simple-calculator
//
if(!defined('ABSPATH')){  
    echo 'What are you trying to look?';
    exit;
}  //To not being accessible by hackers

function simple_calculator_files() {
	wp_enqueue_script( 'simple-calculator-file', plugin_dir_url( __FILE__ ). 'calculator.js')   ;
	wp_enqueue_style( 'simple-calculator-style', plugin_dir_url( __FILE__ ). 'calculator.css')   ;
}
add_action( 'wp_enqueue_scripts', 'simple_calculator_files');

// Register the shortcode
function calculator_shortcode() { ?>
   <section>
<div id="plugin-calculator-container">
    <div id="calculator">
        <input id="display" readonly>
        <div id="keys">
        <button  onclick="appendToDisplay('+')" class="operator-btn">+</button>
            <button class="Calculator_button" onclick="appendToDisplay('7')">7</button>
            <button class="Calculator_button" onclick="appendToDisplay('8')">8</button>
            <button class="Calculator_button" onclick="appendToDisplay('9')">9</button>
            <button onclick="appendToDisplay('-')" class="operator-btn">-</button>
            <button class="Calculator_button" onclick="appendToDisplay('4')">4</button>
            <button class="Calculator_button" onclick="appendToDisplay('5')">5</button>
            <button class="Calculator_button" onclick="appendToDisplay('6')">6</button>
            <button  onclick="appendToDisplay('*')" class="operator-btn">*</button>
            <button class="Calculator_button" onclick="appendToDisplay('1')">1</button>
            <button class="Calculator_button" onclick="appendToDisplay('2')">2</button>
            <button class="Calculator_button" onclick="appendToDisplay('3')">3</button>
            <button onclick="appendToDisplay('/')" class="operator-btn">/</button>
            <button class="Calculator_button" onclick="appendToDisplay('0')">0</button>
            <button class="Calculator_button" onclick="appendToDisplay('.')">.</button>
            <button class="Calculator_button" onclick="calculate()">=</button>
            <button onclick="clearDisplay()" class="operator-btn">C</button>
        </div>
    </div>
</div>
</section>
<?php
}

add_shortcode('calculator', 'calculator_shortcode');



