<?php

declare(strict_types=1);
class Album
{
    private ?int $ID;
    private ?string $Naam;
    private ?string $Artiesten;
    private ?string $Release_datum;
    private ?string $URL;
    private ?string $Afbeelding;
    private ?string $Prijs;

    /**
     * @param int|null $ID
     * @param string $Naam
     * @param string|null $Artiesten
     * @param string|null $Release_datum
     * @param string|null $URL
     * @param string|null $Afbeelding
     * @param string|null $Prijs
     */
    public function __construct(?int $ID, string $Naam, ?string $Artiesten, ?string $Release_datum, ?string $URL, ?string $Afbeelding, ?string $Prijs)
    {
        $this->ID = $ID;
        $this->Naam = $Naam;
        $this->Artiesten = $Artiesten;
        $this->Release_datum = $Release_datum;
        $this->URL = $URL;
        $this->Afbeelding = $Afbeelding;
        $this->Prijs = $Prijs;
    }


    public static function getAll(PDO $db): array
    {
        // Voorbereiden van de query
        $stmt = $db->query("SELECT * FROM Album");

        // Array om personen op te slaan
        $Albums = [];

        // Itereren over de resultaten en personen toevoegen aan de array
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $Album = new Album(
                $row['ID'],
                $row['Naam'],
                $row['Artiesten'],
                $row['Release_datum'],
                $row['URL'],
                $row['Afbeelding'],
                $row['Prijs']
            );
            $Albums[] = $Album;
        }

        // Retourneer array met personen
        return $Albums;
    }




    /**
     * @return int|null
     */
    public function getID(): ?int
    {
        return $this->ID;
    }

    /**
     * @param int|null $ID
     */
    public function setID(?int $ID): void
    {
        $this->ID = $ID;
    }

    /**
     * @return string
     */
    public function getNaam(): string
    {
        return $this->Naam;
    }

    /**
     * @param string $Naam
     */
    public function setNaam(string $Naam): void
    {
        $this->Naam = $Naam;
    }

    /**
     * @return string|null
     */
    public function getArtiesten(): ?string
    {
        return $this->Artiesten;
    }

    /**
     * @param string|null $Artiesten
     */
    public function setArtiesten(?string $Artiesten): void
    {
        $this->Artiesten = $Artiesten;
    }

    /**
     * @return string|null
     */
    public function getReleaseDatum(): ?string
    {
        return $this->Release_datum;
    }

    /**
     * @param string|null $Release_datum
     */
    public function setReleaseDatum(?string $Release_datum): void
    {
        $this->Release_datum = $Release_datum;
    }

    /**
     * @return string|null
     */
    public function getURL(): ?string
    {
        return $this->URL;
    }

    /**
     * @param string|null $URL
     */
    public function setURL(?string $URL): void
    {
        $this->URL = $URL;
    }

    /**
     * @return string|null
     */
    public function getAfbeelding(): ?string
    {
        return $this->Afbeelding;
    }

    /**
     * @param string|null $Afbeelding
     */
    public function setAfbeelding(?string $Afbeelding): void
    {
        $this->Afbeelding = $Afbeelding;
    }

    /**
     * @return string|null
     */
    public function getPrijs(): ?string
    {
        return $this->Prijs;
    }

    /**
     * @param string|null $Prijs
     */
    public function setPrijs(?string $Prijs): void
    {
        $this->Prijs = $Prijs;
    }

}

