function convertFahrenheit(temp) {
    // return Math.floor((temp * 9 / 5 + 32) * 10) / 10;
    return temp * 9 / 5 + 32;
}

let tempC = Number.parseFloat(prompt("Введите температуру в градусах Цельсия: "));
alert(`Цельсий: ${tempC}, Фаренгейт: ${convertFahrenheit(tempC).toFixed(1)}`);