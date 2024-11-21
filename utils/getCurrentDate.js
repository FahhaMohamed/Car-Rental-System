function getCurrentDate() {
    const today = new Date();
    const year = today.getFullYear();
    const month = String(today.getMonth() + 1).padStart(2, '0'); // Add leading zero to month
    const day = String(today.getDate()).padStart(2, '0'); // Add leading zero to day

    return `${year}-${month}-${day}`;
}
