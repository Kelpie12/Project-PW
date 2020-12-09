function format(num) {
  let price = String(num).replace(
    /(?<!\..*)(\d)(?=(?:\d{3})+(?:\.|$))/g,
    "$1."
  );
  return price;
}
