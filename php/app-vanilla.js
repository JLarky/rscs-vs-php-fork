document.getElementById("search").addEventListener("keyup", function () {
  const value = this.value;
  const tableElement = document.getElementById("table");
  const search = new URLSearchParams({ search: value });
  fetch(`search.php?${search}`)
    .then((response) => response.json())
    .then((pokemon) => {
      const newTable = document.createElement("table");

      for (const row of pokemon) {
        newTable.append(tableColumn(row.name), "font-bold");
        newTable.append(tableColumn(row.type.join(", ")));
        newTable.append(tableColumn(row.hp));
        newTable.append(tableColumn(row.attack));
        newTable.append(tableColumn(row.defense));
        newTable.append(tableColumn(row.special_attack));
        newTable.append(tableColumn(row.special_defense));
        newTable.append(tableColumn(row.speed));
      }

      tableElement.replaceWith(newTable);
    });
});

function tableColumn(text, className) {
  const speed = document.createElement("div");
  if (className) {
    speed.classList.add(className);
  }
  speed.textContent = text;
  return speed;
}
