// 削除処理
function deleteBook(e) {
    'use strict';
    if (confirm('本当に削除しますか?')) {
        document.getElementById('delete_book_' + e.dataset.id).submit();
    }
}
function deleteMemo(e) {
    'use strict';
    if (confirm('本当に削除しますか?')) {
        document.getElementById('delete_memo_' + e.dataset.id).submit();
    }
}