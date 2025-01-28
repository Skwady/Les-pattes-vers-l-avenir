document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".validate-btn").forEach(btn => {
        btn.addEventListener("click", function () {
            let avisId = this.getAttribute("data-id");
            fetch(`/admin/validateAvis/${avisId}`, { method: "PUT" })
                .then(response => response.json())
                .then(data => {
                    if (data.status === "success") {
                        this.closest("tr").remove();
                    }
                });
        });
    });

    document.querySelectorAll(".delete-btn").forEach(btn => {
        btn.addEventListener("click", function () {
            let avisId = this.getAttribute("data-id");
            fetch(`/admin/deleteAvis/${avisId}`, { method: "DELETE" })
                .then(response => response.json())
                .then(data => {
                    if (data.status === "deleted") {
                        this.closest("tr").remove();
                    }
                });
        });
    });
});