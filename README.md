# Stop-Email-Disposable
Voici une api qui vous permettra de filtrer les adresses jetables.
# Comment appeler l'api
Rendez-vous sur https://fslrprojet.ch/EmailDisposable/
Tous les paramètres passent en **GET**. 
# Paramètres 
## List 
Le paramètre **List** permet d'afficher la liste des domaines bloqués.
 https://fslrprojet.ch/EmailDisposable/?List
 


## NbEmails
Le paramètre **NbEmails** retourne le nombre d'emails listé. 
  https://fslrprojet.ch/EmailDisposable/?NbEmails

## Email
Le paramètre **Email** retourne  si oui ou non (true/false) l'adresse est une adresse jetable.
Voici deux exemples

Adresse non jetable : 

https://fslrprojet.ch/EmailDisposable/?Email=jean.paul@gmail.com

    {    
       EmailValide:  true     
    }
   
Adresse jetable :  
https://fslrprojet.ch/EmailDisposable/?Email=jean.paul@yopmail.com

    {    
       EmailValide:  false
    }
   

## Domain
Le paramètre **Domain** retourne si oui ou non (true/false) le domaine est un domaine jetable
 
Voici deux exemples

Adresse non jetable : 

https://fslrprojet.ch/EmailDisposable/?Domain=gmail.com

    {    
       DomainValide:  true     
    }
   
Adresse jetable :  
https://fslrprojet.ch/EmailDisposable/?Domain=yopmail.com

    {    
       DomainValide:  false
    }
