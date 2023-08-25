CREATE TABLE IF NOT EXISTS transaction (
    transaction_id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE,
    time TIME,
    book_id CHAR(5),
    member_id CHAR(5),
    return_by_date DATE,
    actual_return_date DATE,
    fine FLOAT,
    FOREIGN KEY (book_id) REFERENCES book (id),
    FOREIGN KEY (member_id) REFERENCES member (member_id)
);