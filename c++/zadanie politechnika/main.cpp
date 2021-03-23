#include <iostream>
#include <cstdlib>
using namespace std;

struct Uczen {
	int numer;
	double srednia;
	int oceny_koncowe[6];
	int ocena_koncowa;
	bool zdal;
	
	Uczen(){
		numer = rand()%1000+1000;
		oceny();
		oblicz_srednia();
		czy_zdal();
	}
	
	void wyswietl_informacje(){
		cout << "uczen o numerze: " << numer << " uzyskal srednia: " << srednia <<" czy zdal: "<< zdal << endl;
	}
	
	void zmian_srednia(double a){
		srednia = a;		
	}
	
	void oceny(){
		for (int i=0; i<6; i++){
			oceny_koncowe[i]=rand()%6+1; 
		}
	}
	
	    void ocena_koncowa_ustal(){
        ocena_koncowa=srednia;
        
    }
	
	void oblicz_srednia(){
		double so=0.;
		for(int i=0; i<6; i++){
			so += oceny_koncowe[i];
		}
		srednia = so / 6.0;
	}
	
	void czy_zdal(){
		zdal = true;
		for(int i=0;i<6;i++){
			if(oceny_koncowe[i] == 1) zdal = false;
		}
	}
	
	void oceny_czastkowe(){
		for(int i=0;i<6;i++){
			cout<<oceny_koncowe[i]<<" "<<endl;
		}
	}
		
};

void wyswietl_tab(Uczen tab[], int rozmiar){
	for(int i=0; i<rozmiar; i++)
		tab[i].wyswietl_informacje();
}

void zmien_numer(Uczen &a, int b){
	a.numer = b;
}

void maks_punkty(Uczen tab[], int rozmiar){
	double sr=1;
	double nr=0;
	for (int i=0; i<rozmiar; i++){
		if(sr <= tab[i].srednia)
		{
			nr=tab[i].numer;
			sr=tab[i].srednia;
		}
	}
	cout<<endl<<"najwyzsza srednia: "<<sr<<endl;
	cout<<"dla ucznia nr: "<<nr<<endl;
}


struct Klasa{
	double srednia_klasy;
	Uczen tablica[20];
	int numer_klasy;
	
	void dodaj_uczniow(){
		for(int i=0;i<20;i++){
			Uczen a;
			tablica[i] = a;
		}
	}
	
	void srednia(){
		double sr=0.;
		for(int i=0;i<20;i++){
			sr+=tablica[i].srednia;
		}
		sr/=20;
	}
	
	Klasa(){
		dodaj_uczniow();
		srednia();
		numer_klasy = rand()%100;
	}
	
	void wyswietl_klase(){
		cout<< "klasa: "<<numer_klasy<<endl;
		cout<<"srednia klasy: "<<srednia_klasy<<endl;
		cout<<"uczniowie w klasie: "<<endl;
		wyswietl_tab(tablica,20);
		
	}
	void wyswietl_ucznia(int i){
		tablica[i].wyswietl_informacje();
		tablica[i].oceny_czastkowe();
	}
	
	void najlepszy_uczen(){
		maks_punkty(tablica,20);
	}
	
	void liczba_jedynek(){
		int jedynki = 0;
		for(int i=0; i<20; i++)
		{
			if(tablica[i].ocena_koncowa==1)
				jedynki+=1;
		}
		cout<<"ilosc jedynek: "<<jedynki<<endl;
	}
};

void lepsza_z_klas(Klasa a, Klasa b){
	if(a.srednia_klasy>b.srednia_klasy)
		cout<<endl<<"klasa "<<a.numer_klasy<<" jest lepsza od "<<b.numer_klasy<<endl;
	else
		cout<<endl<<"klasa "<<b.numer_klasy<<" jest lepsza od "<<a.numer_klasy<<endl;
	
}

int main(int argc, char** argv) {
	
/*	Uczen Tablica[20];
	for(int i = 0; i<10; i++){
	    Uczen a;
	    Tablica[i] = a;
	}
	
	for(int i = 0; i<20; i++){
		Tablica[i].wyswietl_informacje();
	}
	
	cout << endl;
	
	int losowy_uczen = rand()%20;
	Tablica[losowy_uczen].zmian_srednia(6);
	zmien_numer(Tablica[losowy_uczen], 1000);
	Tablica[losowy_uczen].wyswietl_informacje();
	
	cout << endl;
	
	int r = sizeof(Tablica)/sizeof(Tablica[0]);
	wyswietl_tab(Tablica,r);
	
	maks_punkty(Tablica,r);*/
	
	Klasa k1;
	k1.wyswietl_klase();
	cout<<endl<<endl;
	k1.wyswietl_ucznia(16);
	k1.najlepszy_uczen();
	
	Klasa k2;
	k2.najlepszy_uczen();
	lepsza_z_klas(k1,k2);
	k2.liczba_jedynek();
	
	
	
	return 0;
}
