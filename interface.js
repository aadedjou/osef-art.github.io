var client = new XMLHttpRequest();
client.open('GET', '/interface.html');
client.onreadystatechange = function() {
  document.write(client.responseText);
}
client.send();