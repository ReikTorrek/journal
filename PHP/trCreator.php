<?php

class trCreator
{
   private $mailEnding = ['@bk.ru', '@mail.ru', '@gmail.com', '@yandex.ru'];
   private $phoneCode = [926, 915, 916, 928, 925, 988];
   private $string = '0123456789aAbBcCdDeEfFgGqQrRtTyYuUiIoOpPlLkKjJhHgGfFdDsSaAzZxXcCvVbBnNmM';
   private $startTimestamp = 315532801;
   private $endTimestamp = 1262304001;
   private $CompanyType = ['OOO', 'OAO', 'AO'];
   private $names = ['Ваня', 'Даша', 'Женя', 'Игорь', 'Валера', 'Саша', 'Анастасия', 'Тимофей', 'Даня', 'Андрей'];

   function createRandomEmail(): string
   {
       $emailEnd = $this->mailEnding[rand(0, 3)];
       return substr(str_shuffle($this->string), 0, rand(5, 7)).$emailEnd;
   }
   function createRandomPhoneNumber(): string
   {
       $phoneCode = $this->phoneCode[rand(0, 5)];
       return '+7('.$phoneCode.')'.rand(1000000, 9999999);
   }
   function createRandomBirthDate() {
        $randomTimeStamp = mt_rand($this->startTimestamp, $this->endTimestamp);
        return date("d.m.Y", $randomTimeStamp);
   }
   function createRandomCompany(): string
   {
       $randomCompanyType = $this->CompanyType[rand(0, 2)];
       return $randomCompanyType." ".substr(str_shuffle($this->string), 0, rand(5, 10));
   }
   function createRandomName(): string
   {
       return $this->names[rand(0, 9)];
   }
   function createTR(int $id = 0): string
   {
       $name = $this->createRandomName();
       $company = $this->createRandomCompany();
       $phone = $this->createRandomPhoneNumber();
       $email = $this->createRandomEmail();
       $birthDate = $this->createRandomBirthDate();
       return '<tr class="'.$id.'">
        <td class="ID">
            '.$id.'
        </td>
        <td class="name">
            '.$name.'
        </td>
        <td class="company">
            '.$company.'
        </td>
        <td class="number">
            '.$phone.'
        </td>
        <td class="email">
            '.$email.'
        </td>
        <td class="birthDate">
            '.$birthDate.'
        </td>
    </tr>';
   }
}
