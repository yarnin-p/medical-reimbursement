class Alert {
    // showCancelButton: option.showCancelBtn,
    // confirmButtonColor: '#3085d6',
    // cancelButtonColor: '#d33',
    // cancelButtonText: option.cancelBtnText,
    // confirmButtonText: option.confirmBtnText,
    // allowOutsideClick: option.allowOutsideClick,

    constructor(
        showCancelButton,
        showConfirmBtn,
        confirmButtonColor,
        cancelButtonColor,
        cancelButtonText,
        confirmButtonText,
        allowOutsideClick
    ) {
        this.showCancelButton = showCancelButton;
        this.showConfirmBtn = showConfirmBtn
        this.confirmButtonColor = confirmButtonColor;
        this.cancelButtonColor = cancelButtonColor;
        this.cancelButtonText = cancelButtonText;
        this.confirmButtonText = confirmButtonText;
        this.allowOutsideClick = allowOutsideClick;
    }


    doAlertPopup(title = 'UNKNOWN', text = 'UNKNOWN', icon = 'success') {
        icon = getAlertIcon(icon);
        Swal.fire({
            title: title,
            text: text,
            icon: icon,
            showCancelButton: this.showCancelButton,
            showConfirmButton: this.showConfirmBtn,
            confirmButtonColor: this.confirmButtonColor ? this.confirmButtonColor : '#3085d6',
            cancelButtonColor: this.cancelButtonColor ? this.cancelButtonColor : '#d33',
            cancelButtonText: this.cancelButtonText,
            confirmButtonText: this.confirmButtonText,
            allowOutsideClick: this.allowOutsideClick,
        });
    }
}


