var computed = false;
var decimal = 0;

function convert(entryform, from, to) { "use strict";
    var convertfrom = from.selectedIndex;
    var convertto = to.selectIndex;
    entryform.display.value = (entryform.input.value * from[convertfrom].value / to[convertto].value); }

function addChar(input, character) {"use strict";
     if ((character === '.' && decimal === "0") || character !== '.')
    {   (input.value === "" || input.value === "0") ? input.value = character : input.value += character;
        convert(input.form, input.form.measure1, input.form.measure2);
        computed = true;
        if (character =='.')
            {
                decimal = 1;
            }
    }
}

function openVotcom()
{
    window.open("","Display window","toolbar=no,directories=no,menubar=no");
}

function clear(form)
    {
    form.input.value = 0;
    form.display.value = 0;
    decimal = 0;
    }

function changeBacground(hexNumber)
    {
        document.bgColor = hexNumber;
    }
