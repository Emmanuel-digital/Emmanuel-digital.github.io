
        function admin()
        {
            var formEtudiant=document.getElementById('login_etudiant');
            var formAdmin=document.getElementById('login_admin');
            var iconAdmin=document.getElementById('administrateur');
            var iconEtudiant=document.getElementById('etudiant');
            formEtudiant.style.visibility = 'hidden';
            formAdmin.style.visibility = 'visible';
            formAdmin.style.opacity = 1;
            formAdmin.style.marginTop = '-220px';
            formAdmin.style.display = 'block';
            iconAdmin.style.boxShadow='inset 1px 1px 2px rgb(19 210 177/55%), inset -1px 1px 2px rgb(19 210 177/55%),inset -1px 1px 2px rgb(19 210 177/55%),inset -1px 1px 2px rgb(19 210 177/55%)';
            iconEtudiant.style.boxShadow=' none';
            iconEtudiant.style.border = 'none';
            iconEtudiant.style.borderColor = 'none';

        }
        function etudiant()
        {
            var formEtudiant=document.getElementById('login_etudiant');
            var formAdmin=document.getElementById('login_admin');
            var iconAdmin=document.getElementById('administrateur');
            var iconEtudiant=document.getElementById('etudiant');
            formEtudiant.style.visibility = 'visible';
            formAdmin.style.visibility = 'hidden';
            formAdmin.style.opacity = 0;
            // formEtudiant.style.marginBottom = '-100px';

            iconEtudiant.style.boxShadow='inset 1px 1px 2px rgb(19 210 177/55%), inset -1px 1px 2px rgb(19 210 177/55%),inset -1px 1px 2px rgb(19 210 177/55%),inset -1px 1px 2px rgb(19 210 177/55%)';
            iconEtudiant.style.border='1px';
            iconAdmin.style.boxShadow='none';
            iconAdmin.style.border = 'none';
            iconAdmin.style.borderColor = 'none';            
        }