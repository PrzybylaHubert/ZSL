#include <iostream>
using namespace std;
/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char** argv) {

	int tab[5], pomiary, wybor, maxmin, zadana_temp;
	bool x= false, koniec= false;
	float srednia=0;
	
	cout<<"Witam, w ukladzie sterujacym czujnikiem temperatury w pomieszczeniu, prosze wybrac zadana opcje"<<endl;
	cout<<endl;
	
	while(koniec==0)
	{
		//obliczenie sredniej
			for(int i=0; i<pomiary; i++)
				srednia=srednia+tab[i];
			if(pomiary!=0)
			{
				srednia=srednia/pomiary;
				cout<<"srednia temperatura wynosi:"<<srednia<<endl<<endl;
			}
		
		if(x==true)
			cout<<"temperatura ktora ma panowac w pomieszczeniu wynosi:"<<zadana_temp<<endl<<endl;
			
		cout<<"1. Podanie kolejenego pomiaru temperatury (w C)"<<endl;
		cout<<"2. Wypisanie ostatnich 5 pomiarow z pamieci"<<endl;
		cout<<"3. Wypisanie max temperatury jaka jest pamiętana w tablicy"<<endl;
		cout<<"4. Wypisanie min temperatury jaka jest pamiętana w tablicy"<<endl;		
		cout<<"5. Wyzerowania tablicy pomiarow"<<endl;
		cout<<"6. Podanie liczby aktualnie pamietanych pomiarow"<<endl;
		cout<<"7. Sprawdzenie czy temperatura pamiętanych pomiarow wzrasta"<<endl;
		cout<<"8. Ustawienie temperatury jaka ma panowac w pomieszczeniu"<<endl;
		cout<<"9. Uruchomienie algorytmu urzadzenia (patrz nizej)"<<endl;
		cout<<"10.Wylaczenie urzadzenia (czyli wyjscie z programu)"<<endl;	
			
		cin>>wybor;
		
		
		switch(wybor)
		{
			case 1:
			{
				tab[4]=tab[3];
				tab[3]=tab[2];
				tab[2]=tab[1];
				tab[1]=tab[0];
				cout<<"prosze podac ostatni pomiar temperatury(w C)"<<endl;
				cin>>tab[0];
				if(pomiary<=4)
					pomiary++;
				system("CLS");
				break;
			}
			case 2:
			{
				system("CLS");
				if(pomiary==0)
					cout<<"nie podano zadnych wartosci"<<endl;
				for(int i=0; i<pomiary; i++)
					cout<<tab[i]<<endl;
				break;
			}
			case 3:
			{
				maxmin=tab[0];
				for(int i=0; i<pomiary; i++)
				{
					if(maxmin<tab[i])
						maxmin=tab[i];
				}
				system("CLS");
				if(pomiary!=0)
					cout<<"maksymalna temperatura w 5 ostatnich pomiarach to:"<<maxmin<<endl;
				else
					cout<<"nie podano narazie zadnych pomiarow"<<endl;
				break;
			}
			case 4:
			{
				maxmin=tab[0];
				for(int i=0; i<pomiary; i++)
				{
					if(maxmin>tab[i])
						maxmin=tab[i];	
				}
				system("CLS");
				if(pomiary!=0)
					cout<<"minimalna temperatura w 5 ostatnich pomiarach to:"<<maxmin<<endl;
				else
					cout<<"nie podano narazie zadnych pomiarow"<<endl;
				break;
			}
			case 5:
			{
				system("CLS");
				cout<<"pomyslnie wyzerowano pomiary"<<endl;
				pomiary=0;
				for(int i=0; i<5; i++)
					tab[i]=0;
				break;
			}
			case 6:
			{
				system("CLS");
				cout<<"aktualnie pamietane pomiary wynosza:"<<pomiary<<endl;
				break;
			}
			case 7:
			{
				system("CLS");
				if(pomiary<2)
					cout<<"potrzeba przynajmniej 2 pomiarow, aby sprawdzic czy temperatura wzrasta"<<endl;
				else
				{
					if(srednia<tab[0])
						cout<<"ostatnia podana temperatura jest wieksza od sredniej, czyli wzrasta"<<endl;
					else
						cout<<"ostatnia podana temperatura jest mniejsza od sredniej, czyli maleje"<<endl;
				}
				break;
			}
			case 8:
			{
				cout<<"prosze podac temperature jaka ma panowac w pomieszczeniu (w C)"<<endl;
				cin>>zadana_temp;
				system("CLS");
				x = true;
				break;
			}
			case 9:
			{
				system("CLS");
				if(x==0 || pomiary==0)
					cout<<"nie podano zadanej temperatury, lub nie podano zadnych temperatur. Nie mozna uruchomic algorytmu"<<endl;
				else
				{
					if(srednia>=zadana_temp+2)
						cout<<"wylaczam system ogrzewania"<<endl;
					else
						cout<<"wlaczam system ogrzewania"<<endl;
				}
				break;	
			}
			case 10:
			{
				cout<<"koncze dzialanie programu"<<endl;
				koniec= true;
				break;
			}
			default:
			{
				system("CLS");	
				cout<<"podano zla opcje wyboru, prosze sprobowac jeszcze raz"<<endl;
				break;
			}	
		}
		srednia=0;
	}
	return 0;
}
